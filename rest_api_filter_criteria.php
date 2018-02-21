<?php
  
        // $filtro =  'filtro%'; sku like...
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['field']='sku';
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['value']= str_replace('%', '%25', $filtro);
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['conditionType']= 'like';
  
        // $sku1..$sku1000; sku between
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['field']='sku';
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['value']= $sku1;
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['conditionType']= 'from';
        $query['searchCriteria']['filter_groups'][2]['filters'][0]['field']='sku';
        $query['searchCriteria']['filter_groups'][2]['filters'][0]['value']= $sku1000;
        $query['searchCriteria']['filter_groups'][2]['filters'][0]['conditionType']= 'to';
        
        // $filtro = "sku1,sku2"; sku in
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['field']='sku';
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['value']= $filtro;
        $query['searchCriteria']['filter_groups'][1]['filters'][0]['conditionType']= 'in';
  
