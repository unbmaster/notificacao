<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

namespace Domain;

/**
 * NotificacaoService class
 *
 * Responde por múltiplas formas de notificação
 * @author UnBMaster <unbmaster@outlook.com>
 * @version 0.1.0
 */
class NotificacaoService
{

    /**
     * enviarEmaildaFila Method
     *
     * Envia email após a realizar a inscrição (NOT_IMPLEMENTED)
     * @return bool|array
     */
    public function enviarEmaildaFila($message)
    {
        try {
            $inscricaoId = $message['inscricaoId'];
            $destinatario = "{$message['posto']} {$message['nome']} <{$message['email']}>";
            echo "Inscrição {$inscricaoId} realizada! Email para {$destinatario}\n";
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }
}