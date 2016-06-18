<?php
//connect to mysql db
    $con = mysql_connect("localhost","root","qatar123") or die('Could not connect: ' . mysql_error());

//connect to the employee database
    mysql_select_db("qcri_kpi", $con);

//read the json file contents
    $jsondata = file_get_contents('stats-hci.json');
//print_r($jsondata);
//convert json object to php associative array
    $json = json_decode($jsondata, true);

//get the staff details
    $Ename        = $json['name'];
    $EKeyword     = $json['keywords'];
    $Eaffiliation = $json['affiliation'];
    $Eurl         = $json['url'];
    $ETitle       = $json['PublicationArray']['Title'];
    $EAuthor      = $json['PublicationArray']['Author'];
    $EVenue       = $json['PublicationArray']['Venue'];
    $ECitedBy     = $json['PublicationArray']['Cited By'];
    $EYear        = $json['PublicationArray']['Year'];
    $citation     = $json['stats']['citations'];
    $indexh       = $json['stats']['hindex'];
    $i10index     = $json['stats']['i10index'];

//insert into mysql table
  //  $sql = "INSERT INTO `staff_members` (`qfid`, `name`, `publishing_names`, `qf_email`, `other_emails`, `nationality`, `start_date`, `end_date`, `citation_count`, `h_index`, `research_title`, `api_handle`, `personal_webpage`, `is_academic`, `experience`)
  //  VALUES ('988988', 'Anderia', 'kjkjkkj', 'kjkjkjk', 'kjkjkjk', 'kjkjkjkj', '2016-06-06', '2016-06-15', '8998', '87', 'iuiiuuiu', 'uiiuiiu', 'iuiuiuiuiu', '78', '78'); ";
    if(!mysql_query($sql,$con))
    {
        die('Error : ' . mysql_error());
    }
?>
