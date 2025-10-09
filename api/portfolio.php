<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$navigation = [
    [
        'label'    => 'Projetos',
        'href'     => '#projects',
        'icon'     => 'pi pi-briefcase',
        'external' => false,
    ],
    [
        'label'    => 'LinkedIn',
        'href'     => 'https://www.linkedin.com/in/lucas-oliveira-ladislau/',
        'icon'     => 'pi pi-linkedin',
        'external' => true,
    ],
    [
        'label'    => 'GitHub',
        'href'     => 'https://github.com/LucsRafa',
        'icon'     => 'pi pi-github',
        'external' => true,
    ],
    [
        'label'      => 'Email',
        'href'       => 'mailto:lucas.ladislau.dev@gmail.com',
        'icon'       => 'pi pi-envelope',
        'external'   => true,
        'removable'  => true,
        'removeIcon' => 'pi pi-send',
    ],
];

$hero = [
    'greeting'    => 'Olá, eu sou',
    'title'       => 'Lucas Ladislau',
    'description' => [
        'Sou desenvolvedor PHP com sólidos conhecimentos em HTML, CSS e experiência em outras linguagens como Java e Python. Atualmente trabalho na sustentação de sistemas do Porto, garantindo a evolução contínua das soluções. Gosto de unir boas práticas de back-end com interfaces intuitivas, sempre buscando entregas estáveis e com foco na experiência do usuário. Também trabalho com Vue.js, Tailwind CSS e PrimeVue para criar interfaces modernas e dinâmicas, otimizando o desempenho e a estética das aplicações.',
        'Gosto de unir boas práticas de back-end com interfaces intuitivas, sempre buscando entregas estáveis e com foco na experiência do usuário.'
    ],
    'activities'  => [
        'Criação de API em Laravel e desenvolvimento front-end em vue.js',
        'Desenvolvimento e manutenção de aplicações PHP e Laravel;',
        'Construção de serviços e integrações com Node.js;',
        'Configuração de ambientes com XAMPP e Docker;',
        'Modelagem e consultas a bancos de dados MySQL;',
        'Controle de versão e CI/CD com GitLab;',
        'Monitoramento e análise de dados utilizando DBeaver.'
    ],
    'social'      => [
        [
            'label' => 'LinkedIn',
            'href'  => 'https://www.linkedin.com/in/lucas-oliveira-ladislau/',
            'icon'  => 'pi pi-linkedin'
        ],
        [
            'label' => 'GitHub',
            'href'  => 'https://github.com/LucsRafa',
            'icon'  => 'pi pi-github'
        ],
        [
            'label' => 'Email',
            'href'  => 'mailto:lucas.ladislau.dev@gmail.com',
            'icon'  => 'pi pi-envelope'
        ],
    ],
    'avatar'      => [
        'src' => '/images/1742524925532.jpg',
        'alt' => 'Foto de Lucas Ladislau'
    ],
];

$projects = [
    [
        'id'          => 'integra-porto',
        'title'       => 'Integra Porto',
        'status'      => [
            'label' => 'Em Desenvolvimento',
            'icon'  => 'pi pi-sync'
        ],
        'description' => 'Plataforma corporativa em desenvolvimento para o Porto de Santos, responsável por modernizar integrações, unificar dados operacionais em tempo real e disponibilizar painéis estratégicos para as equipes internas.',
        'tags'        => [
            ['label' => 'PHP',     'icon' => 'pi pi-code'],
            ['label' => 'Laravel', 'icon' => 'pi pi-box'],
            ['label' => 'Vue',     'icon' => 'pi pi-desktop'],
            ['label' => 'Tailwind','icon' => 'pi pi-palette'],
        ],
        'image'       => '/images/port.png',
    ],
    [
        'id'          => 'portal-cliente-fornecedor',
        'title'       => 'Portal do Cliente e Fornecedor',
        'status'      => [
            'label' => 'Hospedado',
            'icon'  => 'pi pi-globe'
        ],
        'description' => 'Atuação na manutenção evolutiva do portal, garantindo o bom funcionamento das tecnologias existentes e implementando novas funcionalidades para melhorar a experiência de clientes e fornecedores.',
        'tags'        => [
            ['label' => 'PHP',     'icon' => 'pi pi-code'],
            ['label' => 'Laravel', 'icon' => 'pi pi-box'],
            ['label' => 'Vue',     'icon' => 'pi pi-desktop'],
            ['label' => 'Bootstrap','icon' => 'pi pi-table'],
            ['label' => 'JavaScript', 'icon' => 'pi pi-desktop'],
        ],
        'links'       => [
            ['label' => 'Produção', 'icon' => 'pi pi-external-link', 'href' => 'https://portaldocliente.portodesantos.com.br/login'],
        ],
        'image'       => '/images/PortalCliente.png',
    ],
    [
        'id'          => 'speaker-converter',
        'title'       => 'Speaker Converter',
        'year'        => 2024,
        'status'      => [
            'label' => 'Concluído',
            'icon'  => 'pi pi-check-circle'
        ],
        'description' => 'Aplicação desenvolvida para o meu TCC capaz de converter textos e imagens em áudio, oferecendo acessibilidade para pessoas com deficiência visual.',
        'tags'        => [
            ['label' => 'Python',     'icon' => 'pi pi-bolt'],
            ['label' => 'Django',     'icon' => 'pi pi-sitemap'],
            ['label' => 'HTML',       'icon' => 'pi pi-html5'],
            ['label' => 'CSS',        'icon' => 'pi pi-palette'],
            ['label' => 'JavaScript', 'icon' => 'pi pi-desktop'],
        ],
        'image'       => '/images/Speaker.png',
    ],
];

$technologies = [
    [
        'label'       => 'PHP & Laravel',
        'value'       => 26,
        'icon'        => 'pi pi-code',
        'color'       => '#0ea5e9',
        'description' => 'Desenvolvimento de APIs, microsserviços e integrações de alto impacto.',
    ],
    [
        'label'       => 'Vue & PrimeVue',
        'value'       => 18,
        'icon'        => 'pi pi-desktop',
        'color'       => '#22d3ee',
        'description' => 'Interfaces reativas, layouts componentizados e animações com PrimeVue.',
    ],
    [
        'label'       => 'JavaScript & Node.js',
        'value'       => 14,
        'icon'        => 'pi pi-server',
        'color'       => '#8b5cf6',
        'description' => 'Integrações assíncronas, filas e serviços em tempo real.',
    ],
    [
        'label'       => 'HTML & CSS',
        'value'       => 16,
        'icon'        => 'pi pi-globe',
        'color'       => '#10b981',
        'description' => 'Interfaces responsivas e acessíveis com foco em usabilidade.',
    ],
    [
        'label'       => 'Python & Django',
        'value'       => 12,
        'icon'        => 'pi pi-bolt',
        'color'       => '#f97316',
        'description' => 'Automatização de processos e prototipação rápida.',
    ],
    [
        'label'       => 'Docker',
        'value'       => 10,
        'icon'        => 'pi pi-box',
        'color'       => '#38bdf8',
        'description' => 'Empacotamento de serviços e padronização de ambientes.',
    ],
    [
        'label'       => 'MySQL',
        'value'       => 10,
        'icon'        => 'pi pi-database',
        'color'       => '#facc15',
        'description' => 'Modelagem, consultas otimizadas e relatórios.',
    ],
];

$response = [
    'header'        => [
        'logo'       => 'Meu portfólio...',
        'navigation' => $navigation,
    ],
    'hero'          => $hero,
    'projects'      => $projects,
    'technologies'  => $technologies,
    'footer'        => [
        'text' => sprintf('© Copyright %s, desenvolvido por mim 👨🏾‍💻', date('Y')),
    ],
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
