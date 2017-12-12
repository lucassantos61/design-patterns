<?php

Interface IResposta {
    public function responde(Requisicao $req, Conta $conta);
}