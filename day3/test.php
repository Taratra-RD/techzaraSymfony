<?php
    const ETUDIANT = 
    [
        "nom" =>"RAND",
        "prenom" => "taratra",
        "date_de_naissance" => "12/12/2002",
        "parent" =>
            [
                "pere"=>
                [
                    "nom"=>"RAND",
                    "prenom"=>"Toutoune"
                ],
                "mere"=>
                [
                    "nom"=>"RAND",
                    "prenom"=>"tatane"
                ]
            ],
            "etude"=>
            [
                [
                    "etablissement"=>"CNTEMAD",
                    "diplome"=>"License"
                ],
            ],
            "experience"=>
            [
                [
                    "societe"=>"Techzara",
                    "poste"=>"noob"
                ]
            ]
    ];

    $key = [];
    $pr = [];

    function toHtml($key, $pr)
    {foreach(ETUDIANT as $key1=>$profile)
        {
            if(gettype($profile)!= "array")
            {
                $key1 = ["k"=>$key1, "p"=>$profile];
                $key[] = $key1;
                $pr[] = $profile;
                //echo $key1["k"]."->".$key1["p"]."\n";
            }
            else
            {
                //var_dump($profile);
                foreach($profile as $key2=>$profile1)
                {
                    if(gettype($profile) != "array")
                    {
                        $key2 = ["k"=>$key2, "p"=>$profile1];
                        $key[] = $key2;
                        $pr[] = $profile1;
                        //echo $key2['k']."->".$key2['p']."\n";
                    }
                    else
                    {
                        foreach($profile1 as $key3=>$profile2)
                        {
                            $key3 = ["k" =>$key3, "p" =>$profile2];
                            $key[] = $key3;
                            $pr[] = $profile2;
                            //echo ($key2 === "pere" || $key2 === "mere")?($key3['k']." du ".$key2."->".$key3['p']."\n"):$key3['k']."->".$key3['p']."\n";
                        }
                    }
                }
            }
        }}

        toHtml($key, $pr);
        var_dump($key)
?>