<?php

#gen 4x dict

set_time_limit(0);

$a1 = array(
    'q','w','e','
    r','
    t','
    y','
    u','
    i','
    o','
    p','
    a','
    s','
    d','
    f','
    g','
    h','
    j','
    k','
    l','
    z','
    x','
    c','
    v','
    b','
    n','
    m'
);
$a2 = array(
    'q','w','e','
    r','
    t','
    y','
    u','
    i','
    o','
    p','
    a','
    s','
    d','
    f','
    g','
    h','
    j','
    k','
    l','
    z','
    x','
    c','
    v','
    b','
    n','
    m'
);
$a3 = array(
    'q','w','e','
    r','
    t','
    y','
    u','
    i','
    o','
    p','
    a','
    s','
    d','
    f','
    g','
    h','
    j','
    k','
    l','
    z','
    x','
    c','
    v','
    b','
    n','
    m'
);
$a4 = array(
    'q','w','e','
    r','
    t','
    y','
    u','
    i','
    o','
    p','
    a','
    s','
    d','
    f','
    g','
    h','
    j','
    k','
    l','
    z','
    x','
    c','
    v','
    b','
    n','
    m'
);

$str = '';
foreach ($a1 as $item1)
{
    foreach ($a2 as $item2)
    {
        foreach ($a3 as $item3)
        {
            foreach ($a4 as $item4)
            {
                $str.= trim($item1).trim($item2).trim($item3).trim($item4)."\n";
            }

        }

    }

}

file_put_contents("4letter.txt",$str);
