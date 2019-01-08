<?php
	$memcache = new Memcache;
    $memcache->connect("localhost",11211); 
                                          
    echo "Versão Memcached : " . $memcache->getVersion();
     
    $testArray = array('Oneide', 'Luiz', 'Schneider');
    $temp       = serialize($testArray);
    $memcache->add("key", $temp, false, 30);
 
    echo "Dados em cache:<br />\n";
    print_r(unserialize($memcache->get("key")));
