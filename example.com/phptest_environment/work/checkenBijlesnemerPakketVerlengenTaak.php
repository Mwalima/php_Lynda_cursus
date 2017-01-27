<?php
/**
 * Created by IntelliJ IDEA.
 * User: stplus
 * Date: 27-1-2017
 * Time: 16:38
 */

//cron 30 draaien (pakket verlengen) totdat alle cases zijn verlengd
//pakketten verlengen van alle klanten
//wat zijn alle pakketen

class CheckenBijlesnemerPakketVerlengenTaak
{}

//
//$query = new Query("SELECT x.bijlesnemer_id as id, p2.jaar, p2.maand from (
//    SELECT  bijlesnemer_id, max(jaar*100+maand) as laatste_periode from dbd_bijles_planning p
//JOIN dbd_pakketten pak on pak.id = p.pakket_id
//WHERE p.`status` <> 'oud' and (p.uren > 0 or pak.`stop` = 1 )and (p.jaar > year(now()) or (p.jaar = year(now()) and p.maand >= month(now())))
//group by bijlesnemer_id
//) as x
//JOIN dbd_bijles_planning p2
//on p2.bijlesnemer_id = x.bijlesnemer_id and p2.`status` <> 'oud'
//JOIN dbd_pakketten pak2 on pak2.id = p2.pakket_id
//WHERE
//(p2.jaar*100+p2.maand) = x.laatste_periode and p2.`status` <> 'oud'
//and  x.laatste_periode < (year(DATE_ADD(NOW(),	INTERVAL 12 MONTH))*100+ month(DATE_ADD(NOW(),	INTERVAL 12 MONTH)))
//and pak2.`stop` = 0 AND x.bijlesnemer_id=24276
//");
//
//
////selecteer de bijlesnemer op basis van zijn 24687
////zoek naar het laatste jaar/maand dat verlengd is (2018-02) uit de planning
////zoek naar de pakketten op pakket id (15)
////waar de status ongelijk is aan oud(pakket is niet meer actief)
////en pakket uren zijn meer dan 0 of als er een pakket stop =`1
//
//$sql = queryPDO("SELECT x.bijlesnemer_id as id, p2.jaar, p2.maand from (
//    SELECT  bijlesnemer_id, max(jaar*100+maand) as laatste_periode from dbd_bijles_planning p
//JOIN dbd_pakketten pak on pak.id = p.pakket_id
//WHERE p.`status` <> 'oud' and (p.uren > 0 or pak.`stop` = 1 )and (p.jaar > year(now()) or (p.jaar = year(now()) and p.maand >= month(now())))
//group by bijlesnemer_id
//) as x
//JOIN dbd_bijles_planning p2
//on p2.bijlesnemer_id = x.bijlesnemer_id and p2.`status` <> 'oud'
//JOIN dbd_pakketten pak2 on pak2.id = p2.pakket_id
//WHERE
//(p2.jaar*100+p2.maand) = x.laatste_periode and p2.`status` <> 'oud'
//and  x.laatste_periode < (year(DATE_ADD(NOW(),	INTERVAL 12 MONTH))*100+ month(DATE_ADD(NOW(),	INTERVAL 12 MONTH)))
//and pak2.`stop` = 0 AND x.bijlesnemer_id=24276 ");
//
//
//printf("bijlesplanning regels verlengd : %d\n", $query->getAffectedRows());
//
////verleng de pakketen
//$bijlesnemer_id = 24276;
//$bijlesplanningVerlengen = BijlesPlanningLijst::bijlesnemerPlanningVerlengen($bijlesnemer_id);
//$periode_over_een_jaar = new YearMonthPeriod(date('Y'), date('m'));
//echo "</br>";
//echo "periode die verlengd word ".$periode_over_een_jaar->getYear().$periode_over_een_jaar->getMonth();
//echo "</br>";
//echo "maanden waarmee verlengd word ".$periode_over_een_jaar->addMonthsToString(12);
//echo "</br>";
//echo " tot en met ".$periode_over_een_jaar->getYear()." maand: ".$periode_over_een_jaar->getMonth();
//
//
//if ($query->getAffectedRows()>=1)
//{
//
//$sql = queryPDO("SELECT
//		*
//	FROM
//		dbd_bijles_planning
//	WHERE
//		bijlesnemer_id = 30379
//	AND `status` <> 'oud'
//	AND uren > 0
//	AND (
//		(
//			YEAR (NOW()) = jaar
//			AND MONTH (NOW()) = maand
//		)
//		OR (
//			YEAR (
//				DATE_ADD(NOW(), INTERVAL 1 YEAR)
//			) = jaar
//			AND MONTH (NOW()) = maand
//		)
//	)");
//}
//
//foreach ($sql as $row) {
//    echo "<br>";
//    echo "<br>";
//    echo "jaar: " . $row ['jaar'] . "<br>";
//    echo "maand:" . $row['maand'] . "<br>";
//    echo "pakket: " . $row['pakket_id'] . "<br>";
//    echo "uren: " . $row['pakket_uren'] . "<br>";
//}
//}
