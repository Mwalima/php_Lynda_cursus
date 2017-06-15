<?php

    /**
     * make the selection form all of the db tabels containing zero`s
     * @return string
     */
   function _getColumns(){
       try {
           $sql = ("select group_concat(concat(table_name, '.', column_name) SEPARATOR ', ') as kolommen from information_schema.columns
          where table_schema = 'stplus_14092016' and (DATA_TYPE = 'datetime' or DATA_TYPE = 'date')
          group by table_schema");
           echo "Query execute succefully ";
       }catch (Exception $e){
           echo 'Message'.$e->getMessage("wrong db selected");
       }
       return $sql;
   }

    /**
     * create an array from the string
     */
    function createArray($sql){
        $aDbList =$sql[0]['kolommen'];
        $aDbList = (explode(" ",$aDbList));
        foreach ($aDbList as $key=>$row){
            echo ($key.'--'.$row.'</br>');
        }
    }
