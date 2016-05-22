<?php
/**
 * Created by PhpStorm.
 * User: kito
 * Date: 22.05.16
 * Time: 21:09
 */

class Page extends  Model {
    public function getList($only_published = false ){
        $sql = "SELECT * FROM pages where 1";
        if ($only_published) {
            $sql .= " AND is_published = 1";
        }
        return $this->db->query($sql);
    }

    public function getByAlias($alias){
        $alias = $this->db->escape($alias);
        $sql = "SELECT * FROM pages where alias = '{$alias}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
}