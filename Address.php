<?php

class Address {
    // Método para obter os dados de endereço com base no CEP
    public function get_address($cep) {
        // Remove todos os caracteres que não são dígitos do CEP
        $cep = preg_replace("/[^0-9]/", "", $cep);
        // Monta a URL para a API ViaCEP no formato XML
        $url = "http://viacep.com.br/ws/$cep/xml/";

        try {
            // Tenta carregar os dados do endereço a partir da URL da API
            $xml = simplexml_load_file($url);
            return $xml; // Retorna os dados do endereço em formato XML
        } catch (Exception $e) {
            return null; // Em caso de erro, retorna null
        }
    }
}

?>