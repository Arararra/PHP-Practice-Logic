<!DOCTYPE html>
<html>
<head>
  <title>array-request-function</title>
  <style type="text/css">
    *{
      font-family: calibri;
    }
    table{
      border-collapse: collapse;
      width: 100%;
    }
    th{
      background: #36c9a5;
    }
    tr:nth-child(odd){
      height: 30px;
      background-color: #f2f2f2;
    }
    tr:nth-child(even){
      height: 30px;
      background-color: white;
    }
    input{
      font-size: 16px;
      padding: 12px 20px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }
  </style>
</head>
<body>

<?php 
  function findContains($arrInput, $searchKey, $searchValue) {
    $result = [];
    foreach ($arrInput as $key => $value){
      //!= dan !== itu beda ya
      if (strpos($value[$searchKey], $searchValue) !== false){
        // jika hasil dari strpos bukan false, maka ketemu
        array_push($result, $value);
      }
    }
    return $result;
  }

  function findSame($arrInput, $searchKey, $searchValue) {
    $result = null;
    foreach ($arrInput as $key => $value){
      if ($value[$searchKey] == $searchValue){
       $result = $key;
      }
    }
    return $result;
  }
?>