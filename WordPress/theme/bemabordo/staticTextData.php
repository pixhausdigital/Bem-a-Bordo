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
		'container' => "2_home",
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
		'text_pt' => htmlentities ("“O Mestre na arte da vida faz pouca distinção entre o seu trabalho e o seu lazer, entre a sua mente e o seu corpo, entre a sua educação e a sua recreação, entre o seu amor e a sua religião. Ele dificilmente sabe distinguir um corpo do outro. Ele simplesmente persegue sua visão de excelência em tudo que faz, deixando para os outros a decisão de saber se está trabalhando ou se divertindo. Ele acha que está sempre fazendo as duas coisas simultaneamente.” <br>
		O texto budista acima expressa em sua simplicidade, a política de negócios da Bem a Bordo, contemplando nossa missão, visão, princípios e valores. 
		<br>Bem a Bordo – Negócios Sustentáveis foi criada com o objetivo de contribuir para uma sociedade mais justa e equilibrada, onde os negócios prosperam porque são bons e porque devem servir à sociedade.
		<br> Nós, sócios fundadores, temos como filosofia de vida e propósito de existência, gostar tanto do que fazemos que não sabemos se trabalhamos nos divertindo ou, se nos divertimos trabalhando! 
		<br>Com essa política de bem viver e “bem trabalhar”, conquistamos uma equipe multidisciplinar de colaboradores, contratados, parceiros e apoiadores que é formada por engenheiros, químicos, advogados, auditores, profissionais de marketing e mídias. Conosco estão também, valorosos profissionais oriundos do quadro de reserva da Marinha do Brasil, de comitês técnicos de organizações públicas e privadas de onde trouxeram larga experiência em suas respectivas áreas de atuação. As relações são estabelecidas com base na ética e na transparência, o que produz resultados altamente satisfatórios e confiáveis. 
		<br>Que possamos ser mestres na arte da vida, deixando nossa marca de excelência por onde passarmos."), 
		'container' => "3_aboutUs",
		'textClass' => "simple"
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
		'textClass' => "simple"
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
		'textClass' => "simple"
	) 
);$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'id' => "valuesTitle", 
		'text_en' => htmlentities (""), 
		'text_pt' => htmlentities ("Valores"), 
		'container' => "4_mission",
		'textClass' => "simple"
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
		'textClass' => "simple"
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