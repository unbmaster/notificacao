<?php
/*
 * This file is part of the https://github.com/unbmaster
 * For demonstration purposes, use it at your own risk.
 * (c) UnBMaster <unbmaster@outlook.com>
 * License GNU General Public License (GPL)
 */

require __DIR__ . '/../../../../vendor/autoload.php';

use Core\MessageBroker;

MessageBroker::subscribe(
    'canalInscricaoRealizada',    # exchange
    'filaEmail',                  # queue
    '\Domain\NotificacaoService', # class
    'enviarEmaildaFila'           # method
);