<?php


namespace App;


class Show_social_networks
{
    public function show_social_network()
    {
        foreach (SocialNetwork::all() as $network) {
            echo '<a href="'.$network->link.'">' . $network->title . '</a> <br>';
        }
    }
}