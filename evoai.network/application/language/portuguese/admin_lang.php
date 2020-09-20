<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Language variable for the admin control panel
 */
$lang['yes']								= 'Sim';
$lang['no']									= 'Não';
$lang['pages']								= 'Páginas';
$lang['blog']								= 'Blog';

// Settings
$lang['settings_help_txt']					= "As configurações permitem que você altere a forma como seu site executa certas ações e informações básicas como o nome do seu site.";
$lang['allow_comments_label']				= "Permitir comentários";
$lang['allow_comments_desc']				= "Você quer permitir comentários em suas postagens de blog?";
$lang['base_controller_label']				= "Controlador Padrão";
$lang['base_controller_desc']				= "Escolha onde a página inicial é...";
$lang['blog_description_label']				= "Descrição do Blog";
$lang['blog_description_desc']				= "Informe uma breve descrição (ou marcação) para o seu blog.";
$lang['category_list_limit_label']			= "Limite de Categoria";
$lang['category_list_limit_desc']			= "Escolha a quantidade de categorias exibidas na página inicial.";
$lang['enable_atom_comments_label']			= "Habilitar comentários do ATOM";
$lang['enable_atom_comments_desc']			= "Deseja ativar o feed de comentários ATOM para o seu blog?";
$lang['enable_atom_posts_label']			= "Ativar postagens ATOM";
$lang['enable_atom_posts_desc']				= "Deseja ativar o feed de posts da ATOM para o seu blog?";
$lang['enable_rss_comments_label']			= "Habilitar comentários RSS";
$lang['enable_rss_comments_desc']			= "Deseja ativar o feed de comentários RSS para o seu blog?";
$lang['enable_rss_posts_label']				= "Ativar postagens RSS";
$lang['enable_rss_posts_desc']				= "Deseja ativar o feed de posts do RSS para o seu blog?";
$lang['links_per_box_label']				= "Limite de Links";
$lang['links_per_box_desc']					= "Escolha a quantidade de links exibidos na página inicial.";
$lang['mod_non_user_comments_label']		= "Aprovar Comentários de Usuários Não-Registrados";
$lang['mod_non_user_comments_desc']			= "Deseja aprovar comentários de usuários não registrados e não conectados?";
$lang['mod_user_comments_label']			= "Aprovar Comentários de Usuários";
$lang['mod_user_comments_desc']				= "Deseja aprovar comentários de usuários registrados?";
$lang['months_per_archive_label']			= "Limite de Arquivo";
$lang['months_per_archive_desc']			= "Escolha a quantidade de itens arquivados exibidos na página inicial.";
$lang['posts_per_page_label']				= "Limite de Publicações por página";
$lang['posts_per_page_desc']				= "Quantas postagens de blog gostaria de mostrar em cada página do seu blog?";
$lang['recaptcha_private_key_label']		= "Google Recaptcha Chave Privada";
$lang['recaptcha_private_key_desc']			= "Digite a chave PRIVADA fornecida pelo google.";
$lang['recaptcha_site_key_label']			= "Google Recaptcha Chave de Site";
$lang['recaptcha_site_key_desc']			= "Digite a chave do SITE fornecida pelo google.";
$lang['site_name_label']					= "Nome do Site";
$lang['site_name_desc']						= "Digite o nome do seu site.";
$lang['theme_image_label']					= "";
$lang['theme_image_desc']					= "";
$lang['use_recaptcha_label']				= "Ativar Recaptcha";
$lang['use_recaptcha_desc']					= 'Gostaria de ativar o Google Recaptcha para o seu site para ajudar a eliminar o SPAM? <a href="https://www.google.com/recaptcha/intro/" target="_blank">Mais informações <sup><i class = "fa fa-external-link"></i></sup></a>';
$lang['use_honeypot_label']					= "Ativar Form Honey Pots";
$lang['use_honeypot_desc']					= "Para ajudar a prevenir SPAM, você pode usar um honey pot, um SPAMmer preenchendo um campo oculto que não deveria ser. Isso ajudará a proteger seus comentários e formulários de registro de robôs, mas não de humanos.";
$lang['mail_protocol_label']				= "Protocolo de E-mail";
$lang['mail_protocol_desc']					= "Escolha o protocolo de correio com o qual você gostaria de enviar e-mails.";
$lang['smtp']								= 'SMTP (Requer conta de e-mail smtp Ex.: seu servidor, google, yahoo, etc.)';
$lang['mail']								= 'MAIL (Fácil de usar, ruim para uma grande lista de destinatários)';
$lang['sendmail']							= "SENDMAIL (Alguns servidores não permitem o protocolo 'mail').";
$lang['sendmail_path_label']				= "Caminho do Sendmail";
$lang['sendmail_path_desc']					= "(Obrigatório se estiver usando Sendmail) Digite o sendmail_path. Geralmente encontrado em seu painel de controle do servidor.";
$lang['smtp_user_label']					= "Usuário SMTP";
$lang['smtp_user_desc']						= "(Obrigatório se estiver usando SMTP) Digite o nome de usuário da sua conta SMTP";
$lang['smtp_host_label']					= "Servidor SMTP";
$lang['smtp_host_desc']						= "(Obrigatório se estiver usando SMTP) Digite o servidor SMTP para sua conta. (Ex: smtp.google.com, mail.yourdomain.com, etc.)";
$lang['smtp_pass_label']					= "Senha SMTP";
$lang['smtp_pass_desc']						= "(Obrigatório se estiver usando SMTP) Digite a Senha do SMTP do seu nome de usuário";
$lang['smtp_port_label']					= "Porta SMTP";
$lang['smtp_port_desc']						= "(Obrigatório se estiver usando SMTP) Digite o número da porta SMTP fornecido pelo seu provedor de e-mail.";
$lang['smtp_crypto_label']					= "SMTP Crypt";
$lang['smtp_crypto_desc']					= "(Required if usung SMTP) Choose a Cryptographic method your server requires to connect to it.";
$lang['admin_email_label']					= "E-mail do administrador";
$lang['admin_email_desc']					= "O endereço de e-mail no qual você gostaria de receber avisos do site.";
$lang['server_email_label']					= "E-mail de Envio";
$lang['server_email_desc']					= "O endereço de e-mail no qual você gostaria que o servidor configurasse como 'De'. Isso pode ser 'noreply@' ou seu endereço de e-mail para que as pessoas possam responder para um humano.";

$lang['email_activation_label']					= "Ativação de E-mail";
$lang['email_activation_desc']					= "Deseja que novos usuários verifiquem seu e-mail antes de ter permissão para entrar e comentar? (Recomendamos que SIM)";
$lang['manual_activation_label']				= "Ativação Manual";
$lang['manual_activation_desc']					= "Deseja verificar manualmente cada usuário que se registre?";
$lang['allow_registrations_label']				= "Permitir Cadastro";
$lang['allow_registrations_desc']				= "Deseja permitir que os usuários criem uma conta no seu blog?";

// Links
$lang['links_hdr']							= "Links";
$lang['link_remove_btn']					= "Remover Link";
$lang['link_edit_btn']						= "Editar Link";
$lang['index_add_new_link']					= "Adicionar Novo Link";
$lang['add_link_subheading']				= "Adicione as informações do link abaixo. Estes são links externos, certifique-se de adicionar http: // ou https: // para a URL do seu link.";
$lang['link_form_name']						= "Nome do Link";
$lang['link_form_url']						= "http://";
$lang['link_form_desc']						= "Descrição";
$lang['link_form_position']					= "Posição";
$lang['link_form_target']					= "Alvo";
$lang['link_form_visibility']				= "Visibilidade";
$lang['blank_window']						= "Abrir em nova janela";
$lang['same_window']						= "Abrir na mesma janela";
$lang['visible']							= "Visível";
$lang['not_visible']						= "Oculto";
$lang['save_link_btn']						= "Salvar Link";
$lang['link_added_success_resp']			= "Link adicionado com sucesso";
$lang['link_added_fail_resp']				= "Não foi possível adicionar Link. Por favor, tente novamente.";
$lang['link_removed_success_resp']			= "Link removido com sucesso";
$lang['link_removed_fail_resp']				= "Não foi possível remover o link. Por favor, tente novamente.";
$lang['link_update_success_resp']			= "Link atualizado com sucesso";
$lang['link_update_fail_resp']				= "Não foi possível atualizar o Link. Por favor, tente novamente.";

// Categories
$lang['cats_hdr']							= "Categorias";
$lang['cat_remove_btn']						= "Remover Categoria";
$lang['cat_edit_btn']						= "Editar Categoria";
$lang['index_add_new_cat']					= "Adicionar Nova Categoria";
$lang['add_cat_subheading']					= "Adicione as informações da categoria abaixo.";
$lang['cat_form_name']						= "Nome da Categoria";
$lang['cat_form_url']						= "(do mesmo modo acima, tudo em minúsculas, sem espaços)";
$lang['cat_form_desc']						= "Descrição";
$lang['blank_window']						= "Abrir em nova janela";
$lang['same_window']						= "Abrir";
$lang['visible']							= "Visível";
$lang['not_visible']						= "Oculto";
$lang['save_cat_btn']						= "Salvar Categoria";
$lang['cat_added_success_resp']				= "Categoria adicionada com sucesso";
$lang['cat_added_fail_resp']				= "Não foi possível adicionar Categoria. Por favor, tente novamente.";
$lang['cat_removed_success_resp']			= "Categoria removida com sucesso";
$lang['cat_removed_fail_resp']				= "Não foi possível remover a Categoria. Por favor, tente novamente.";
$lang['cat_update_success_resp']			= "Categoria atualizada com sucesso";
$lang['cat_update_fail_resp']				= "Não foi possível atualizar a categoria. Por favor, tente novamente.";

// pages
$lang['pages_hdr']							= "Páginas";
$lang['optional_hdr']						= "Opcional";
$lang['optional_help_text']					= "Embora as opções abaixo sejam opcionais, elas são altamente recomendadas e ajudam muito a Search Engine Optimization (SEO). Também geramos meta tags para o Facebook e o Twitter com esses valores.";
$lang['page_remove_btn']					= "Remover Página";
$lang['page_edit_btn']						= "Editar Página";
$lang['index_add_new_page']					= "Adicionar Nova Página";
$lang['index_edit_page']					= "Editar Página";
$lang['save_page_btn']						= "Salvar Página";
$lang['page_added_success_resp']			= "Página adicionada com sucesso";
$lang['page_added_fail_resp']				= "Não foi possível adicionar a página. Por favor, tente novamente.";
$lang['page_removed_success_resp']			= "Página removida com sucesso";
$lang['page_removed_fail_resp']				= "Não foi possível remover a Página. Por favor, tente novamente.";
$lang['page_update_success_resp']			= "Página atualizada com sucesso";
$lang['page_update_fail_resp']				= "Não foi possível atualizar a Página. Por favor, tente novamente.";
$lang['page_form_title_text']				= "Título da Página";
$lang['page_form_title_help_text']			= "Digite o título da sua página.";
$lang['page_form_status_text']				= "Status";
$lang['page_form_status_help_text']			= "Escolha se deseja que a página seja Publicada ou Rascunho.";
$lang['page_form_status_active']			= "Publicada";
$lang['page_form_status_inactive']			= "Rascunho";
$lang['page_form_content_text']				= "Conteúdo da Página";
$lang['page_form_content_help_text']		= "Digite o conteúdo da sua página abaixo. Use o editor para ajudá-lo a formatar com o Markdown.";
$lang['page_form_meta_title_text']			= "META Título";
$lang['page_form_meta_title_help_text']		= "Normalmente é o mesmo que o título da sua página, mas você pode inserir outro aqui.";
$lang['page_form_meta_keywords_text']		= "META Palavras-chave";
$lang['page_form_meta_keywords_help_text']	= "Digite as palavras-chave desta página separada por vírgulas.";
$lang['page_form_meta_desc_text']			= "META Descrição";
$lang['page_form_meta_desc_help_text']		= "Digite a descrição para esta página. É melhor manter entre 50 e 100 caracteres.";
$lang['page_form_home_text']				= "Página inicial";
$lang['page_form_home_help_text']			= "Marque a caixa se esta página for a página inicial. Você deve escolher Páginas para ser o controlador padrão em Configurações. Qualquer outra página atualmente marcada como página inicial será removida como página inicial.";
$lang['page_form_url_title_text']			= "Título da URL";
$lang['page_form_url_title_help_text']		= "Esta é a 'slug' mostrada no URL da sua página. Se você alterar esse valor, não deve haver espaços entre palavras, em vez disso, traços usados. <br> Ex.: novo-titulo-url";
$lang['page_form_redirect_text']			= "Redirecionamento";
$lang['page_form_redirect_help_text']		= "Se você alterar o título da URL acima, configuramos automaticamente um redireccionamento HTTP 301 (permanente) para você, de modo que o URL anterior indique o novo título da url da página . Aqui, você pode substituir as configuração padrão.";
$lang['page_form_redirect_none']			= "Não redirecione o título antigo da URL";
$lang['page_form_redirect_perm']			= "Redirecionamento permanente para novo título da URL";
$lang['page_form_redirect_temp']			= "Redirecionar temporariamente para o novo título da URL";

// posts
$lang['posts_hdr']							= "Publicações";
$lang['optional_hdr']						= "Opcional";
$lang['optional_help_text']					= "Embora as opções abaixo sejam opcionais, elas são altamente recomendadas e ajudam muito a Search Engine Optimization (SEO). Também geramos meta tags para o Facebook e o Twitter com esses valores.";
$lang['post_remove_btn']					= "Remover Publicação";
$lang['post_edit_btn']						= "Editar Publicação";
$lang['index_add_new_post']					= "Adicionar Nova Publicação";
$lang['index_edit_post']					= "Editar Publicação";
$lang['save_post_btn']						= "Salvar Publicação";
$lang['post_added_success_resp']			= "Publicação adicionado com sucesso";
$lang['post_added_fail_resp']				= "Não foi possível adicionar postagem. Por favor, tente novamente.";
$lang['post_removed_success_resp']			= "Publicação removido com sucesso";
$lang['post_removed_fail_resp']				= "Não foi possível remover a publicação. Por favor, tente novamente.";
$lang['post_update_success_resp']			= "Publicação atualizado com sucesso";
$lang['post_update_fail_resp']				= "Não foi possível atualizar a publicação. Por favor, tente novamente.";
$lang['post_form_title_text']				= "Título da Publicação";
$lang['post_form_title_help_text']			= "Digite o título da sua publicação.";
$lang['post_form_status_text']				= "Status";
$lang['post_form_status_help_text']			= "Escolha se deseja que a publicação seja Publicada ou Rascunho.";
$lang['post_form_status_active']			= "Publicada";
$lang['post_form_status_inactive']			= "Rascunho";
$lang['post_form_content_text']				= "Conteúdo da Publicação";
$lang['post_form_content_help_text']		= "Digite o conteúdo da sua publicação abaixo. Use o editor para ajudá-lo a formatar com o Markdown.";
$lang['post_form_excerpt_text']				= "Resumo da Publicação";
$lang['post_form_excerpt_help_text']		= "Insira um pequeno trecho de aproximadamente 200 caracteres (resumo) da sua publicação abaixo.";
$lang['post_form_cats_help_text']			= "Escolha todas as categorias. Para escolher várias categorias, pressione CMD/CTRL + Clique em suas escolhas.";
$lang['post_form_meta_title_text']			= "META Título";
$lang['post_form_meta_title_help_text']		= "Normalmente, o mesmo que o título da sua postagem, mas você pode inserir outro aqui.";
$lang['post_form_meta_keywords_text']		= "META Palavras-chave";
$lang['post_form_meta_keywords_help_text']	= "Digite as palavras-chave para esta publicação separada por vírgulas.";
$lang['post_form_meta_desc_text']			= "META Descrição";
$lang['post_form_meta_desc_help_text']		= "Digite a descrição para esta publicação. É melhor manter entre 50 e 100 caracteres.";
$lang['post_form_home_text']				= "Página Inicial";
$lang['post_form_home_help_text']			= "Marque a caixa se esta publicação for a página inicial. Você deve escolher postagens para ser o controlador padrão em Configurações. Quaisquer outras postagens atualmente marcadas como publicação de página inicial serão removidas como página inicial.";
$lang['post_form_url_title_text']			= "Título da URL";
$lang['post_form_url_title_help_text']		= "Este é o 'slug' mostrado no URL da sua publicação. Se você alterar esse valor, não deve haver espaços entre palavras, em vez disso, traços devem ser usados. <br> Ex.: novo-titulo";
$lang['post_add_form_url_title_help_text']	= "Este é o 'slug' mostrado no URL da sua publicação. Se você inserir isso, não deve haver NENHUM espaço entre palavras, em vez disso, traços devem ser usados. Você pode deixar isso em branco e vamos construir um para você com base no título de sua postagem. <br> Ex.: novo-titulo";

$lang['post_form_redirect_text']					= "Redirecionamento";
$lang['post_form_redirect_help_text']				= "Se você alterar o título da URL acima, configuraremos automaticamente um redireccionamento HTTP 301 (permanente) para você, de modo que o URL anterior aponte para o novo titulo da publicação. Aqui, você pode substituir a configuração padrão.";
$lang['post_form_redirect_none']					= "Não redirecione o título antigo da URL";
$lang['post_form_redirect_perm']					= "Redirecionamento permanente para novo título da URL";
$lang['post_form_redirect_temp']					= "Redirecionar temporariamente para o novo título da URL";
$lang['post_form_feature_image_text']				= "Imagem de Destaque";
$lang['post_add_form_feature_image_help_text']		= "Carregue uma imagem de destaque ou deixe em branco.";
$lang['post_edit_form_feature_image_help_text']		= "Carregue uma imagem de destaque para substituir a atual ou deixe em branco para manter a mesma.";
$lang['post_new_post_notification_sbj']				= "Nova Publicação";
$lang['post_new_post_notification_msg']				= "Olá! Acabamos de adicionar novos conteúdos. Abaixo está a nova publicação. <br><br>";
$lang['post_new_post_notification_msg_foot']		= "<br><br>Você está recebendo este e-mail porque solicitou ser notificado sobre novo conteúdo que publicamos.";

// navigation
$lang['nav_hdr']							= "Menu Principal";
$lang['nav_new_hdr']						= "Criar Item de Menu";
$lang['nav_right_side_hdr']					= "Link de Menu";
$lang['nav_right_side_desc']				= "Abaixo você pode vincular a uma página ou publicação específica. Deixe todas as opções em branco para apontar para sua página inicial.";
$lang['index_add_new_nav']					= "Adicionar Item no Menu";
$lang['tab_all_nav_items']					= "Todos os Itens do Menu";
$lang['tab_nav_redirects']					= "Redirecionamentos";
$lang['nav_hdr']							= "Menu Principal";
$lang['index_nav_desc']						= "Arraste e solte itens para reordenar os links exibidos no menu princial do seu website.";
$lang['index_redirect_desc']				= "A tabela abaixo mostra todos os redirecionamentos para publicações &amp; páginas no seu site. Ele também inclui o tipo (página ou publicação) e o tipo de redirecionamento (301 - Permanente ou 302 - Temporário). <b>A edição e remoção de redirecionamentos devem ser realizadas por usuários experientes</b>.";
$lang['nav_no_redirects_found']				= "Nenhum Redirecionamento Encontrado";
$lang['redir_edit_btn']						= "Editar Redirecionamento";
$lang['redir_remove_btn']					= "Remover Redirecionamento";
$lang['nav_edit_btn']						= "Editar";
$lang['nav_remove_btn']						= "Remover";
$lang['nav_edit_hdr']						= "Editar Item de Menu";
$lang['nav_save_btn']						= "Salvar Item de Menu";
$lang['nav_form_title_text']				= "Título";
$lang['nav_form_title_help_text']			= "Este é o texto mostrado na barra de navegação que os visitantes vêem e clicam.";
$lang['nav_form_desc_text']					= "Descrição";
$lang['nav_form_desc_help_text']			= "Esta é a descrição deste link e usado para o campo do título. Os visitantes vêem isso ao passar o mouse sobre o texto do link.";
$lang['nav_form_url_text']					= "URL";
$lang['nav_form_url_help_text']				= "Esta é a parte da URL do seu link. Adicionamos automaticamente a URL do seu site para você ao gerar links.";
$lang['nav_form_url_text_example']			= "sobre   <-- exemplo de uso";
$lang['nav_form_redirect_text']				= "Redirecionamento";
$lang['nav_form_redirect_help_text']		= "Se você mudou o campo 'Escolher uma Página' ou 'Escolher uma Publicação', configuramos automaticamente um redireccionamento HTTP 301 (permanente) para você, de modo que a URL antiga aponte para a nova URL da página. Aqui, você pode substituir as configurações padrão.";
$lang['nav_form_redirect_text']				= "Redirecionamento";
$lang['nav_form_type_text']					= "Tipo";
$lang['nav_form_type_help_text']			= "Se você mudou a opção 'Escolher uma Página' ou 'Escolher uma Publicação', escolha se esse item de navegação aponta para uma página ou uma publicação. Precisamos disso para apontar corretamente o redirecionamento.";
$lang['nav_form_type_page']					= "Está é uma Página";
$lang['nav_form_type_post']					= "Esta é uma Publicação do Blog";
$lang['nav_update_success_resp']			= "Item de menu atualizado com sucesso";
$lang['nav_update_fail_resp']				= "Não foi possível atualizar o item de menu. Por favor, tente novamente.";
$lang['nav_form_choose_page']				= "Escolha uma Página";
$lang['nav_form_choose_page_help_text']		= "Escolha das Páginas existentes.";
$lang['nav_form_choose_post']				= "Escolha uma Publicação do Blog";
$lang['nav_form_choose_post_help_text']		= "Escolha entre publicações do blog existentes.";
$lang['pages_index_controller_label']		= "Página marcada como página inicial";

// redirection
$lang['nav_redir_edit_hdr']					= "Editando Redirecionamento";
$lang['nav_redir_edit_subheading']			= "<b><em>Importante</em></b>: Somente usuários experientes devem editar ou remover itens de redirecionamento. Alterá-los pode ter um impacto negativo sobre SEO e o número de errors 404 relatados por visitantes. Use esta função com muito cuidado.";

$lang['nav_redirect_removed_success_resp']	= "Redirecionamento removido com sucesso";
$lang['nav_redirect_removed_fail_resp']		= "Não é possível remover o item de redirecionamento. Por favor, tente novamente.";
$lang['nav_redirect_edit_success_resp']		= "Redirecionamento atualizado com sucesso";
$lang['nav_redirect_edit_fail_resp']		= "Não foi possível atualizar o item de redirecionamento. Por favor, tente novamente.";
$lang['nav_redir_form_old_slug_text']		= "De";
$lang['nav_redir_form_old_slug_desc']		= "O campo De é o segmento da URL antigo, aquele que inicialmente será chamado.";
$lang['nav_redir_form_new_slug_text']		= "Para";
$lang['nav_redir_form_new_slug_desc']		= "O campo Para é o novo segmento da URL, aquele ao qual o visitante será redirecionado.";
$lang['nav_redir_form_type_text']			= "Tipo";
$lang['nav_redir_form_type_desc']			= "Se esta é uma Página ou uma Publicação";
$lang['nav_redir_form_code_text']			= "Tipo de Redirecionamento HTTP";
$lang['nav_redir_form_code_desc']			= "Este redirecionamento deve ser permanente (301) ou temporário (302)?";

// Comments
$lang['comments_hdr']						= "Gerenciar Comentários";
$lang['comments_no_comments_found_mod']		= "Nenhum comentário aguardando aprovação";
$lang['comments_no_comments_found_act']		= "Nenhum comentário publicado";
$lang['comments_tab_moderated']				= "Aguardando Aprovação";
$lang['comments_tab_active']				= "Publicados";
$lang['comments_btn_edit']					= "Editar";
$lang['comments_btn_remove']				= "Excluir";
$lang['comments_btn_view']					= "Detalhes";
$lang['comments_btn_accept']				= "Aceitar";
$lang['comments_btn_hide']					= "Ocultar";
$lang['comments_tbl_hdr_post_title']		= "Título da Publicação";
$lang['comments_tbl_hdr_author']			= "Autor";
$lang['comments_tbl_hdr_date']				= "Data";
$lang['comments_tbl_hdr_short_excerpt']		= "Descrição curta";
$lang['comments_reg_user']					= "Usuário Registrado";
$lang['comment_removed_success_resp']		= "Comentário excluído com sucesso";
$lang['comment_removed_fail_resp']			= "Não é possível excluir comentários. Por favor, tente novamente.";
$lang['comment_accept_success_resp']		= "Comentário aceito com sucesso";
$lang['comment_accept_fail_resp']			= "Não é possível aceitar comentários. Por favor, tente novamente.";
$lang['comment_hide_success_resp']			= "Comentário oculto com sucesso";
$lang['comment_hide_fail_resp']				= "Não foi possível ocultar o comentário. Por favor, tente novamente.";
$lang['comment_update_success_resp']		= "Comentário atualizado com sucesso";
$lang['comment_update_fail_resp']			= "Não foi possível atualizar o comentário. Por favor, tente novamente.";
$lang['comment_form_field_content']			= "Conteúdo";
$lang['comment_form_field_content_hlp_txt']	= "Você pode editar o conteúdo do comentário do usuário abaixo.";
$lang['comment_edit_hdr']					= "Editar Comentário";
$lang['comment_edit_subheading']			= "";
$lang['comment_details_hdr']				= "Detalhes";
$lang['comments_save_btn']					= "Salvar Comentário";
$lang['comments_blog_post_hdr']				= "Publicação do Blog";
$lang['comments_comment_id']				= "ID do Comentário";
$lang['comments_author']					= "Autor";
$lang['comments_date_posted']				= "Data que foi Recebido";
$lang['comments_current_status']			= "Status Atual";

// updates
$lang['updates_hdr']						= "Atualizações";
$lang['updates_subheader']					= "Você pode atualizar Evoai network e o framework CodeIgniter sobre o qual foi construído. Abaixo está o status atual de sua instalação.";
$lang['updates_failed_connection']			= "Falha ao conectar-se à API do open-blog.org";
$lang['updates_update_available']			= "Existe uma atualização disponível! <br><b><em>AVISO IMPORTANTE: Faça um backup completo do site antes de começar a atualização!</em></b>";
$lang['updates_update_not_available']		= "Sua instalação do Evoai network está atualizada.";
$lang['updates_ob_install_text']			= "Sua instalação do Evoai network";
$lang['updates_ob_current_stable_text']		= "Último Lançamento Estável";
$lang['updates_install_up_to_date_text']	= "A instalação do seu Evoai network está atualizada. Você não precisa fazer nada.";
$lang['updates_update_now_btn']				= "Atualizar Agora";
$lang['updates_update_success_resp']		= "Atualização efetuada com sucesso. Certifique-se de verificar suas configurações";
$lang['updates_update_failed_resp']			= "Não foi possível atualizar o Evoai network. Tente novamente ou encontre ajuda no site do Evoai network.";
$lang['updates_download_btn']				= "Faça o download da atualização";

// themes
$lang['themes_hdr']							= "Temas";
$lang['themes_subheader']					= 'Abaixo está uma lista de temas atualmente instalados. Para encontrar mais temas e instruções de instalação, visite-nos no <a href="http://open-blog.org" target="_blank">website do Evoai network</a>.';
$lang['themes_theme_in_use']				= "Este tema está ativo";
$lang['themes_theme_not_in_use']			= "Este tema NÃO esté ativo";
$lang['theme_author_title']					= "Autor";
$lang['theme_author_email']					= "E-mail de suporte";
$lang['theme_version']						= "Versão";
$lang['themes_activate_theme']				= "Ativar Tema";
$lang['themes_theme_type_desc']				= "Tipo do Tema";
$lang['themes_type_admin']					= "Administração";
$lang['themes_type_front']					= "Website";
$lang['themes_activated_success_resp']		= "Tema ativo com sucesso";
$lang['themes_activated_fail_resp']			= "Não foi possível ativar o tema. Por favor, tente novamente.";

// social
$lang['social_hdr']							= "Redes Sociais";
$lang['social_hdr_help_txt']				= "Adicione, edite ou remova links para suas contas de redes sociais.";
$lang['social_add_new']						= "Adicionar";
$lang['social_edit_btn']					= "Editar";
$lang['social_remove_btn']					= "Remover";
$lang['social_removed_success_resp']		= "Link de rede social removido com sucesso";
$lang['social_removed_fail_resp']			= "Não foi possível remover o link da rede social. Por favor, tente novamente.";
$lang['index_add_new_social']				= "Adicionar link de rede social";
$lang['social_form_name']					= "Nome";
$lang['social_form_url']					= "URL";
$lang['social_form_active']					= "Ativo";
$lang['add_social_subheading']				= "Adicione um novo link de rede social. Basta digitar o nome do serviço de mídia social, o URL completo (incluir http:// ou https://) e se você quiser que ele esteja ativo. Os links ativos são exibidos nas páginas públicas do seu site.";
$lang['save_social_btn']					= "Salvar Link da Rede Social";
$lang['social_update_success_resp']			= "Link de rede social atualizado com sucesso";
$lang['social_update_fail_resp']			= "Não foi possível atualizar o link da rede social. Por favor, tente novamente.";
$lang['social_added_success_resp']			= "O link da rede social foi adicionado com sucesso";
$lang['social_added_fail_resp']				= "Não foi possível adicionar o link da rede social. Por favor, tente novamente.";

// languages
$lang['languages_hdr']						= "Idiomas";
$lang['languages_hdr_help_txt']				= "Ativar, Desativar e definir um idioma como padrão. Os idiomas habilitados são oferecidos aos visitantes do site.";
$lang['languages_disable_btn']				= "Desativar";
$lang['languages_enable_btn']				= "Ativar";
$lang['languages_make_default_btn']			= "Tornar padrão";
$lang['languages_disable_success_resp']		= "Idioma desativado com sucesso";
$lang['languages_disable_fail_resp']		= "Não foi possível desativar o idioma. Por favor, tente novamente.";
$lang['languages_enable_success_resp']		= "Idioma habilitado com sucesso";
$lang['languages_enable_fail_resp']			= "Não foi possível habilitar o idioma. Por favor, tente novamente.";
$lang['languages_default_success_resp']		= "Idioma padrão alterado com sucesso";
$lang['languages_default_fail_resp']		= "Não foi possível alterar o idioma padrão. Por favor, tente novamente.";
$lang['languages_help_text']				= 'Notas: O "É Padrão" é definido automaticamente quando um visitante visualiza seu site. Eles podem mudar o idioma para qualquer idioma "Ativado" que eles preferem. Isto <b> não </b> altera qualquer texto que você digitar em seu blog.';
$lang['languages_table_lang_h']				= "Idioma";
$lang['languages_table_abbr_h']				= "Abreviação";
$lang['languages_table_is_default_h']		= "É padrão";
$lang['languages_table_enabled_h']			= "Ativado";

$lang['save_settings']						= "Salvar Configurações";

// form action responses
$lang['settings_update_success']			= "Configurações atualizadas com sucesso";
$lang['settings_update_failed']				= "As configurações não foram atualizadas. Por favor, tente novamente.";

// permissions
$lang['permission_check_failed']			= "Você deve estar conectado e ter permissão para visualizar esta página.";

// installer directory warning
$lang['installer_dir_warning_notice']		= "O diretório /installer/ ainda está presente. Para uma melhor segurança, você deve excluir o diretório installler/ e seu conteúdo imediatamente!";

$lang['SSL']						= "Secure Socket layer (SSL)";
$lang['TLS']						= "Transport Layer Security (TLS)";
