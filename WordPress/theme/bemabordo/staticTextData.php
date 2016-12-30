<?php
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "homeMenu", 
		'text_en' => htmlentities ("Home"), 
		'text_pt' => htmlentities ("Início"), 
		'container' => "1_menu",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "aboutUsMenu", 
		'text_en' => htmlentities ("About Us"), 
		'text_pt' => htmlentities ("Sobre nós"), 
		'container' => "1_menu",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "missionMenu", 
		'text_en' => htmlentities ("Our Mission"), 
		'text_pt' => htmlentities ("Nossa Missão"), 
		'container' => "1_menu",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "whoWeAreMenu", 
		'text_en' => htmlentities ("Who We Are"), 
		'text_pt' => htmlentities ("Quem Somos"), 
		'container' => "1_menu",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "whatWeDoMenu", 
		'text_en' => htmlentities ("What We Do"), 
		'text_pt' => htmlentities ("O que fazemos"), 
		'container' => "1_menu",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "newsMenu", 
		'text_en' => htmlentities ("News"), 
		'text_pt' => htmlentities ("Atualidades"), 
		'container' => "1_menu",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contactMenu", 
		'text_en' => htmlentities ("Contact Us"), 
		'text_pt' => htmlentities ("Contato"), 
		'container' => "1_menu",
		'textClass' => "simple"
	) 
);
/**
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "textTopLine", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Fazer o que gostamos é o que nos torna felizes.", 
		'container' => "2_home"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "textBottomLine", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Trabalhar para tornar outras pessoas felizes e os negócios sustentáveis, é parte do nosso negócio.", 
		'container' => "2_home"
	) 
);
**/
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "welcome", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Ética, respeito, integridade, justiça e responsabilidade."), 
		'container' => "2_carousel",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "aboutUsTitle", 
		'text_en' => htmlentities ("Bem a Bordo"), 
		'text_pt' => htmlentities ("Bem a Bordo"), 
		'container' => "3_aboutUs",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "aboutUsText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Bem a Bordo – Gestão de Negócios Sustentáveis foi criada para centralizar o trabalho voluntário, informal e de caráter profissional, que vinha sendo realizado por seus fundadores. Sua atuação está na prestação de serviços de gestão operacional e administrativa; gestão ambiental; nas engenharias; na formação, capacitação e treinamento técnicos, inclusive para o segmento náutico. Realiza auditorias, elabora projetos e assessora na implantação de sistemas de gestão para certificações internacionais e de responsabilidade social.  Sediada em São Paulo e representada no Rio de Janeiro, atua em todo o território nacional através de parcerias, com criatividade, inovação e permanente atualização para criar soluções personalizadas e competitivas para seus clientes."), 
		'container' => "3_aboutUs",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "missionTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Missão"), 
		'container' => "4_mission",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "missionText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Superar expectativas, encantar, realizar e entregar com qualidade, profissionalismo e ética as soluções e os serviços a que se propõe; surpreender o cliente na conquista de resultados efetivos; inspirar pessoas e organizações a conquistar parcerias duradoras e negócios confiáveis."), 
		'container' => "4_mission",
		'textClass' => "rich"
	) 
);$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "visionTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Visão"), 
		'container' => "4_mission",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "visionText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Ser uma empresa bem-sucedida, de alta eficiência e de reconhecida excelência na resolução dos desafios apresentados pelo cliente em tornar seus negócios lucrativos e sustentáveis, contribuindo assim, para a construção de uma sociedade mais ética, justa e sustentável."), 
		'container' => "4_mission",
		'textClass' => "rich"
	) 
);$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "valuesTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Valores"), 
		'container' => "4_mission",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "valuesText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Acreditar na lisura dos negócios, na qualidade das relações, na colaboração mútua, na inovação, no compartilhar, na responsabilidade e no cumprimento do dever para com as gerações futuras, praticando sustentabilidade."), 
		'container' => "4_mission",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "whatWeDoTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("O que Fazemos"), 
		'container' => "5_whatWeDo",
		'textClass' => "simple"
	) 
);


$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "consultingTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Consultoria, assessoria e gestão organizacional"), 
		'container' => "5_whatWeDo",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "consultingText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("<ul>
                	<li>Administração e Gestão terceirizados</li>
                
<li>Gestão de empreendimentos náuticos</li>
<li>Organização e readequação de marinas e estruturas náuticas;</li>
<li>Adequação e atendimento aos requisitos legais </li>
<li>Diagnóstico Ambiental</li>
<li>Segurança e saúde ocupacional</li>
<li>Análise e gerenciamento de riscos</li>
<li>Desenvolvimento, implantação e manutenção de sistemas de gestão</li>
<li>Implantação de Sistema Integrado de Gestão da ISO 9001, ISO 14001 e OHSAS 18001</li>
<li>Gerenciamento de resíduos e recuperação energética</li>
<li>Prevenção e controle da poluição em instalações náuticas</li>

                </ul>"), 
		'container' => "5_whatWeDo",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "corporateGovernanceTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Governança Corporativa"), 
		'container' => "5_whatWeDo",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "corporateGovernanceText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities (" <ul>
                	<li>Administração e Gestão terceirizados</li>
                
<li>Auditorias de 1ª e 2ª partes</li>
<li>Compliance, Conformidade legal, Combate à Corrupção</li>
<li>Desenvolvimento Sustentável</li>
<li>Due Diligence</li>
<li>Marketing de Relacionamento</li>
<li>Planejamento Estratégico</li>
                </ul>"), 
		'container' => "5_whatWeDo",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "trainingTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Formação, Capacitação e Treinamento"), 
		'container' => "5_whatWeDo",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "trainingText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("<ul>
<li>Análise de riscos ambientais e operacionais</li> 
<li>  Análise de riscos e combate a corrupção</li> 
<li>  Atendimento a emergências ambientais: brigadas de incêndio; combate a fogo embarcado (segmentonáutico), primeiros socorros; sobrevivência no mar</li> 
<li>  Boas práticas de operação e manejo em estruturas náuticas</li> 
<li>  Excelência no atendimento</li> 
<li>  Formação de auditores internos</li> 
<li>  Identificação de riscos ambientais, de segurança e saúde ocupacional;</li> 
<li>  Identificação de riscos de corrupção e ações de prevenção;</li> 
<li>  Planos de emergência</li> 
<li>  Prevenção e combate a riscos operacionais (incêndios e avarias)</li> 
<li>  Identificação de avaliação da legislação aplicável</li> 
<li>  Formação e treinamento para obtenção de habilitação para arrais amadores</li> 
<li>  Atendimento aos requisitos legais da Marinha do Brasil na prestação de serviços terceirizados</li> 
<li>  Treinamento para uso racional de recursos em embarcações: água e energia</li>

                </ul>"), 
		'container' => "5_whatWeDo",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "reportsTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Laudos"), 
		'container' => "5_whatWeDo",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "reportsText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("<ul>
<li> Engenharia construtiva</li> 
<li>  Químicos e ambientais</li> 
<li>  Programa de Prevenção a Riscos Ambientais – PPRA</li> 
<li>  Análises de segurança e saúde ocupacional</li> 

                </ul>"), 
		'container' => "5_whatWeDo",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "sustainabilityTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Sustentabilidade e Responsabilidade social"), 
		'container' => "5_whatWeDo",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "sustainabilityText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities (" <ul>
<li>o Criação de indicadores de desempenho</li> 
<li>Relatórios de sustentabilidade</li> 
<li>Desenvolvimento Sustentável – implantação de programas</li> 

                </ul>"), 
		'container' => "5_whatWeDo",
		'textClass' => "rich"
	) 
);
/**
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "planningTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Planejamento", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "planningText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temporLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamem ipsum dolor sit amet.", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "advisoryTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Assessoria", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "advisoryText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temporLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamem ipsum dolor sit amet.", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "trainingTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Capacitação", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "trainingText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temporLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temporLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamem ipsum dolor sit amet.", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "administrationTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Administração", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "administrationText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temporLorem ipsum dolor sit amet, consetetur sadipscing elitr,", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "managementTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Gestão", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "managementText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod temporLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamem ipsum dolor sit amet.", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "habilitationTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Habilitação", 
		'container' => "5_whatWeDo"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "habilitationText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor", 
		'container' => "5_whatWeDo"
	) 
);
**/

$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "whoWeAreTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Quem Somos"), 
		'container' => "5_whoWeAre",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "whoWeAreText", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Constituída por profissionais qualificados e bem sucedidos em suas áreas de atuação, com formação acadêmica compatível e alinhada com a cultura organizacional, a Bem a Bordo atua com ética e transparência, gerando uma relação de confiança com o cliente. Atua para transformar e desenvolver as pessoas e organizações através de capacitação, treinamento e qualificação para o desenvolvimento de competências. Desenvolve soluções integradas em formação corporativa, capacitação técnica e treinamento específico. Através de consultoria empresarial oferece metodologias para disseminar conhecimentos, práticas, tecnologias e inovações para consolidação da busca pela melhoria contínua dos produtos e serviços de seus clientes.  Assim como a Bem a Bordo, a equipe privilegia a ética, a excelência, a qualidade, o respeito, o comprometimento e o profissionalismo em suas relações."), 
		'container' => "5_whoWeAre",
		'textClass' => "rich"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "newsTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Atualidades"), 
		'container' => "6_news",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "clickHere", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Clique aqui"), 
		'container' => "6_news",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "allNewsLink", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities (" para ir para a página de atualidades"), 
		'container' => "6_news",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contactTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Contato"), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_subtitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitr"), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_information", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Lorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitr."), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_form_namePlaceholder", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Nome"), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_form_emailPlaceholder", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Email"), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_form_subjectPlaceholder", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Assunto"), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_form_messagePlaceholder", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Mensagem"), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_form_submitButton", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Enviar"), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);
$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "contact_form_information", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Ou se preferir envie um e-mail para contato@bemabordo.com.br."), 
		'container' => "7_contact",
		'textClass' => "simple"
	) 
);


?>