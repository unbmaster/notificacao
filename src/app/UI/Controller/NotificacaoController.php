<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Controller;

/**
 * NotificacaoController class
 *
 * Orquestra e trata requisições
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
class NotificacaoController
{
    public function email($request, $response)
    {
        echo 'API não implementada. Apenas listening/worker RabbitMQ.';
        return $response;
    }
}