<?php

use \OCFram\Manager;

abstract class NewsManager extends Manager
{
    /**
     * Méthod retournant une list de news demandée
     * @param $debut int La première news à selectionner
     * @param $limit int Le nombre de news à selectionner
     * @return array la liste des news. Chaque entrée est une instance de News.
     */
    abstract public function getList($debut = -1, $limite = -1);

    /**
     * Méthode retournant une news précise.
     * @param $id int L'identifiant de la news à récupérer
     * @return News La news demandée
     */
    abstract public function getUnique($id);
}