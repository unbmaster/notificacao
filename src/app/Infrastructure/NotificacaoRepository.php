<?php
///*
// * This file is part of the https://github.com/unbmaster
// * For demonstration purposes, use it at your own risk.
// * (c) UnBMaster <unbmaster@outlook.com>
// * License GNU General Public License (GPL)
// */
//
//namespace Infrastructure;
//
//use Domain\{NotificacaoRepositoryInterface, Inscricao};
//
///**
// * PlanoRepository Class
// *
// * Manipula dados da inscrição via SQLite
// * @author UnBMaster <unbmaster@outlook.com>
// * @version 0.1.0
// */
//class NotificacaoRepository implements InscricaoRepositoryInterface
//{
//    /**
//     * Adiciona o militar a um plano (Inscrição)
//     * @param Inscricao $inscricao
//     * @return void
//     */
//    public function add(Inscricao $inscricao) {
//        $db = new \SQLite3('/db/inscricao.db');
//
//        # Verifica se o militar já está inscrito no plano
//        $statement = $db->prepare("SELECT count(*) total FROM inscricao WHERE militarId=? AND planoId=?");
//        $statement->bindValue(1, $inscricao->getMilitarId());
//        $statement->bindValue(2, $inscricao->getPlanoId());
//        $result = $statement->execute();
//
//        # Adiciona o militar no plano caso já não esteja inscrito
//        if($result->fetchArray()['total'] == 0) {
//            $statement = $db->prepare("INSERT INTO inscricao VALUES(null,?,?, datetime('now','localtime'))");
//            $statement->bindValue(1, $inscricao->getMilitarId());
//            $statement->bindValue(2, $inscricao->getPlanoId());
//            $statement->execute();
//        }
//        return true;
//    }
//}