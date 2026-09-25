<?php
/**
 * Traxter - Configuração central do site
 * Altere contatos, redes e textos globais somente aqui.
 * Redes sociais com valor vazio ('') não são exibidas no site.
 */
return [
    'site' => [
        'url'         => 'https://traxter.com.br',
        'name'        => 'Traxter Tecnologia & Automação',
        'title'       => 'Traxter | Automação com IA e WhatsApp para empresas em Campo Grande - MS',
        'description' => 'Automatizamos atendimento, cobranças e rotinas da sua empresa no WhatsApp, com IA e integrados aos sistemas que você já usa. Empresa de Campo Grande - MS.',
        'og_image'    => 'assets/og-image.png', // 1200x630 px. Enquanto não existir, a tag não é emitida.
        'ga_id'       => 'G-HM7H90EN72',
    ],
    'contato' => [
        'whatsapp'     => '5567998723814',
        'whatsapp_msg' => 'Olá! Vim pelo site da Traxter e quero entender como automatizar processos na minha empresa.',
        'email'        => 'contato@traxter.com.br',
        'endereco'     => 'Av. Senador Antônio Mendes Canale, 1429 - Pioneiros',
        'cidade'       => 'Campo Grande - MS, 79070-295',
        'horario'      => 'Segunda a sexta, 09:00 às 18:00',
    ],
    'redes' => [
        'linkedin'  => '', // ex.: https://www.linkedin.com/company/traxter
        'instagram' => '', // ex.: https://www.instagram.com/traxter
    ],
];
