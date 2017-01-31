<?php

/**
//cron 30 draaien (pakket verlengen) totdat alle cases zijn verlengd
//pakketten verlengen van alle klanten
//wat zijn alle pakketen
 **/
class CheckenBijlesnemerPakketVerlengenTaak {


    /**
     * @return int
     * selecteer de bijlesnemer op basis van zijn 24687
     * zoek naar het laatste jaar/maand dat verlengd is (2018-02) uit de planning
     * zoek naar de pakketten op pakket id (15)
     * waar de status ongelijk is aan oud(pakket is niet meer actief)
     * en pakket uren zijn meer dan 0 of als er een pakket stop =`1
     */
    public function countBijlesnemersPakketVerlengen() {

        $query = new Query("SELECT
            x.bijlesnemer_id AS id,
            p2.jaar,
            p2.maand
        FROM
            (
                SELECT
                    bijlesnemer_id,
                    -- id
                    max(jaar * 100 + maand) AS laatste_periode -- laatste periode pakket actief --> datum e.q. 201712 (dec 2017)
                FROM
                    dbd_bijles_planning p
                JOIN dbd_pakketten pak ON pak.id = p.pakket_id
                WHERE
                    p.`status` <> 'oud' -- waar het pakket ingepland mag worden
                AND (p.uren > 0 OR pak.`stop` = 1) -- waar je ingeplande uren of een stoppakket hebt
                AND (
                    -- en
                    p.jaar > YEAR (now()) -- het pakket moet in een volgend jaar zijn
                    OR (
                        --  of
                        p.jaar = YEAR (now()) -- in het huidige jaar
                        AND p.maand >= MONTH (now()) -- maand in de toekomst
                    )
                )
                GROUP BY
                    bijlesnemer_id
            ) AS x
        JOIN dbd_bijles_planning p2 ON p2.bijlesnemer_id = x.bijlesnemer_id -- 
        AND p2.`status` <> 'oud' -- waar het pakket ingepland mag worden
        JOIN dbd_pakketten pak2 ON pak2.id = p2.pakket_id
        WHERE
            (p2.jaar * 100 + p2.maand) = x.laatste_periode -- pak de laatste beschikbare maand uit de planning
        AND x.laatste_periode < (
            -- laatste periode is kleiner dan de huidige maand over een jaar (201801)
            YEAR (
                DATE_ADD(NOW(), INTERVAL 12 MONTH)
            ) * 100 + MONTH (NOW())
        )
        
        AND pak2.`stop` = 0 LIMIT 75
                ");

        return $query->getAffectedRows();
    }

    /**
     * @param int $affectedrows
     */
    public function verifyBijlesplanningCronData(int $affectedrows, int $bijlesnemer_id) {
        $affectedrows = $this->countBijlesnemersPakketVerlengen;
        $l = new BijlesPlanningLijst();
        //haal alle bijlesnemers op aan de hand van hun id
        $l->setFilterBijlesnemer($bijlesnemer_id);
        $bijlesnemer_id = $l;
        if ($affectedrows >= 1) {
            $sql = queryPDO("SELECT * FROM  dbd_bijles_planning
        WHERE
            bijlesnemer_id = '.$bijlesnemer_id.'
        AND `status` <> 'oud'
        AND uren > 0
        AND (
            (
                YEAR (NOW()) = jaar
                AND MONTH (NOW()) = maand
            )
            OR (
                YEAR (
                    DATE_ADD(NOW(), INTERVAL 1 YEAR)
                ) = jaar
                AND MONTH (NOW()) = maand
            )
        )");
        }

        foreach ($sql as $row){

            $message = "bijlesnemer_id".$row['bijlesnemer_id']."<br>";
            $message .= "jaar: ".$row ['jaar']."<br>";
            $message .= "maand:".$row['maand']."<br>";
            $message .= "pakket: ".$row['pakket_id']."<br>";
            $message = "uren: ".$row['pakket_uren']."<br>";

            $previous = '';
            if($previous){
                //
                if($previous == $row ['jaar']){
                    echo "pakket niet correct verlengd";
                }elseif($previous+1 == $row['jaar']){
                    echo "pakket is correct verlengd";
                }else{
                    echo "controleer het pakket voor deze bijlesnemer".$row['bijlesnemer_id'];
                }
            }
            $previous = $row ['jaar'];

        }
    }

    /**
     * @param $bijlesnemer_id
     */
    public function signalDataIinconsistency($bijlesnemer_id){
        $laatste_bijles_planning = BijlesPlanningLijst::getLastBijlesPlanning($bijlesnemer_id);
        if(!$laatste_bijles_planning->isConsistent() && !$laatste_bijles_planning->getBijlesnemer()->isInactiveBijlesnemer()) {
            $msgSlack = "Pakket van bijlesnemer ".$laatste_bijles_planning->getBijlesnemer()->id." kan niet verlengd worden wegens data inconsistentie: ".$laatste_bijles_planning->getInconsistentReason();
            SlackWebhook::sendMsg($msgSlack);
            WarningLijst::addWarning($msgSlack);
            //return;
        }
    }

}

$newPlanningCheck = new CheckenBijlesnemerPakketVerlengenTaak();
echo $newPlanningCheck->countBijlesnemersPakketVerlengen();

echo $newPlanningCheck->verifyBijlesplanningCronData($bijlesnemer_id);


?>