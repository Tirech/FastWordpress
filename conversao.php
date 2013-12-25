\<?php
#Arquivo /var/www/wordpress/wp-admin/user-new.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/user-new.php');
#$aq = convertSQL2pg($aq);
/*
			wpmu_signup_user( $new_user_login, $_REQUEST[ 'email' ], array( 'add_to_blog' => $wpdb->blogid, 'new_role' => $_REQUEST[ 'role' ] ) );
			if ( isset( $_POST[ 'noconfirmation' ] ) && is_super_admin() ) {
				$key = $wpdb->get_var( $wpdb->prepare( "SELECT activation_key FROM {$wpdb->signups} WHERE user_login = %s AND user_email = %s", $new_user_login, $_REQUEST[ 'email' ] ) );
				wpmu_activate_signup( $key );
				$redirect = add_query_arg( array('update' => 'addnoconfirmation'), 'user-new.php' );
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/user-new.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/network.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/network.php');
#$aq = convertSQL2pg($aq);
/*
foreach ( $wpdb->tables( 'ms_global' ) as $table => $prefixed_table )
	$wpdb->$table = $prefixed_table;

/**
--
	if ( $wpdb->get_var( "SHOW TABLES ILIKE '$wpdb->site'" ) )
		return $wpdb->get_var( "SELECT domain FROM $wpdb->site ORDER BY id ASC LIMIT 1" );
	return false;
}
--
	$post = $wpdb->get_row( "SELECT ID FROM $wpdb->posts WHERE post_date < DATE_SUB(NOW(), INTERVAL 1 MONTH) AND post_status = 'publish'" );
	if ( empty( $post ) )
		return true;
--
			$subdomain_install = (bool) $wpdb->get_var( "SELECT meta_value FROM $wpdb->sitemeta WHERE site_id = 1 AND meta_key = 'subdomain_install'" );
?>
	<div class="error"><p><strong><?php _e('Warning:'); ?></strong> <?php _e( 'An existing WordPress network was detected.' ); ?></p></div>
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/network.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/edit-comments.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/edit-comments.php');
#$aq = convertSQL2pg($aq);
/*
		$comment_ids = $wpdb->get_col( $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_approved = %s AND %s > comment_date_gmt", $comment_status, $delete_time ) );
		$doaction = 'delete';
	} elseif ( isset( $_REQUEST['delete_comments'] ) ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/edit-comments.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/upload.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/upload.php');
#$aq = convertSQL2pg($aq);
/*
		$post_ids = $wpdb->get_col( "SELECT ID FROM $wpdb->posts WHERE post_type='attachment' AND post_status = 'trash'" );
		$doaction = 'delete';
	} elseif ( isset( $_REQUEST['media'] ) ) {
--
			$lost = $wpdb->get_col( "
				SELECT ID FROM $wpdb->posts
				WHERE post_type = 'attachment' AND post_parent > '0'
				AND post_parent NOT IN (
					SELECT ID FROM $wpdb->posts
					WHERE post_type NOT IN ( 'attachment', '" . join( "', '", get_post_types( array( 'public' => false ) ) ) . "' )
				)
--
				$attached = $wpdb->query( $wpdb->prepare( "UPDATE $wpdb->posts SET post_parent = %d WHERE post_type = 'attachment' AND ID IN ( $attach_string )", $parent_id ) );
				foreach ( $attach as $att_id ) {
					clean_attachment_cache( $att_id );
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/upload.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/export.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/export.php');
#$aq = convertSQL2pg($aq);
/*
	$months = $wpdb->get_results( $wpdb->prepare( "
		SELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month
		FROM $wpdb->posts
		WHERE post_type = %s AND post_status != 'auto-draft'
		ORDER BY post_date DESC
--
		$authors = $wpdb->get_col( "SELECT DISTINCT post_author FROM {$wpdb->posts} WHERE post_type = 'post'" );
		wp_dropdown_users( array( 'include' => $authors, 'name' => 'post_author', 'multi' => true, 'show_option_all' => __('All') ) );
?>
--
		$authors = $wpdb->get_col( "SELECT DISTINCT post_author FROM {$wpdb->posts} WHERE post_type = 'page'" );
		wp_dropdown_users( array( 'include' => $authors, 'name' => 'page_author', 'multi' => true, 'show_option_all' => __('All') ) );
?>
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/export.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/network/upgrade.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/network/upgrade.php');
#$aq = convertSQL2pg($aq);
/*
		$blogs = $wpdb->get_results( "SELECT * FROM {$wpdb->blogs} WHERE site_id = '{$wpdb->siteid}' AND spam = '0' AND deleted = '0' AND archived = '0' ORDER BY registered DESC LIMIT {$n}, 5", ARRAY_A );
		if ( empty( $blogs ) ) {
			echo '<p>' . __( 'All done!' ) . '</p>';
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/network/upgrade.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/network/site-settings.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/network/site-settings.php');
#$aq = convertSQL2pg($aq);
/*
		$blog_prefix = $wpdb->get_blog_prefix( $id );
		$options = $wpdb->get_results( "SELECT * FROM {$blog_prefix}options WHERE option_name NOT ILIKE '\_%' AND option_name NOT ILIKE '%user_roles'" );
		foreach ( $options as $option ) {
			if ( $option->option_name == 'default_role' )
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/network/site-settings.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/network/site-new.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/network/site-new.php');
#$aq = convertSQL2pg($aq);
/*
	$wpdb->hide_errors();
	$id = wpmu_create_blog( $newdomain, $path, $title, $user_id , array( 'public' => 1 ), $current_site->id );
	$wpdb->show_errors();
	if ( !is_wp_error( $id ) ) {
		if ( !is_super_admin( $user_id ) && !get_user_option( 'primary_blog', $user_id ) )
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/network/site-new.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/install.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/install.php');
#$aq = convertSQL2pg($aq);
/*
	$user_table = ( $wpdb->get_var("SHOW TABLES ILIKE '$wpdb->users'") != null );

	// Ensure that Blogs appear in search engines by default
--
$mysql_version  = $wpdb->db_version();
$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
$mysql_compat   = version_compare( $mysql_version, $required_mysql_version, '>=' ) || file_exists( WP_CONTENT_DIR . '/db.php' );
--
if ( ! is_string( $wpdb->base_prefix ) || '' === $wpdb->base_prefix ) {
	display_header();
	die( '<h1>' . __( 'Configuration Error' ) . '</h1><p>' . __( 'Your <code>wp-config.php</code> file has an empty database table prefix, which is not supported.' ) . '</p></body></html>' );
--
		if ( ! empty( $wpdb->error ) )
			wp_die( $wpdb->error->get_error_message() );

		display_header();
--
			$wpdb->show_errors();
			$result = wp_install($weblog_title, $user_name, $admin_email, $public, '', $admin_password);
			extract( $result, EXTR_SKIP );
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/install.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/ms.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/ms.php');
#$aq = convertSQL2pg($aq);
/*
		$tables = $wpdb->tables( 'blog' );
		/**
		 * Filter the tables to drop when the blog is deleted.
--
			$wpdb->query( "DROP TABLE IF EXISTS \"$table\"" );
		}

		$wpdb->delete( $wpdb->blogs, array( 'blog_id' => $blog_id ) );

		$uploads = wp_upload_dir();
--
			$post_ids = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_author = %d", $id ) );
			foreach ( (array) $post_ids as $post_id ) {
				wp_delete_post( $post_id );
--
			$link_ids = $wpdb->get_col( $wpdb->prepare( "SELECT link_id FROM $wpdb->links WHERE link_owner = %d", $id ) );

			if ( $link_ids ) {
--
	$meta = $wpdb->get_col( $wpdb->prepare( "SELECT umeta_id FROM $wpdb->usermeta WHERE user_id = %d", $id ) );
	foreach ( $meta as $mid )
		delete_metadata_by_mid( 'user', $mid );
--
	$wpdb->delete( $wpdb->users, array( 'ID' => $id ) );

	clean_user_cache( $user );
--
		if ( $wpdb->get_var( $wpdb->prepare( "SELECT user_email FROM {$wpdb->users} WHERE user_email=%s", $_POST['email'] ) ) ) {
			$errors->add( 'user_email', __( "<strong>ERROR</strong>: The email address is already used." ), array( 'form-field' => 'email' ) );
			delete_option( $current_user->ID . '_new_email' );
--
	$wpdb->update( $wpdb->users, array( sanitize_key( $pref ) => $value ), array( 'ID' => $id ) );

	$user = new WP_User( $id );
--
	if ( $site_id == $wpdb->siteid )
		$result = true;
	else
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/ms.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/user.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/user.php');
#$aq = convertSQL2pg($aq);
/*
	$query = $wpdb->prepare("SELECT ID, post_title FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'draft' AND post_author = %d ORDER BY post_modified DESC", $user_id);

	/**
--
	return $wpdb->get_results( $query );
}

--
		$post_ids = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_author = %d AND post_type IN ('$post_types_to_delete')", $id ) );
		if ( $post_ids ) {
			foreach ( $post_ids as $post_id )
--
		$link_ids = $wpdb->get_col( $wpdb->prepare("SELECT link_id FROM $wpdb->links WHERE link_owner = %d", $id) );

		if ( $link_ids ) {
--
		$post_ids = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_author = %d", $id ) );
		$wpdb->update( $wpdb->posts, array('post_author' => $reassign), array('post_author' => $id) );
		if ( ! empty( $post_ids ) ) {
			foreach ( $post_ids as $post_id )
--
		$link_ids = $wpdb->get_col( $wpdb->prepare("SELECT link_id FROM $wpdb->links WHERE link_owner = %d", $id) );
		$wpdb->update( $wpdb->links, array('link_owner' => $reassign), array('link_owner' => $id) );
		if ( ! empty( $link_ids ) ) {
			foreach ( $link_ids as $link_id )
--
		$meta = $wpdb->get_col( $wpdb->prepare( "SELECT umeta_id FROM $wpdb->usermeta WHERE user_id = %d", $id ) );
		foreach ( $meta as $mid )
			delete_metadata_by_mid( 'user', $mid );
--
		$wpdb->delete( $wpdb->users, array( 'ID' => $id ) );
	}

*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/user.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/post.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/post.php');
#$aq = convertSQL2pg($aq);
/*
		$pages = $wpdb->get_results("SELECT ID, post_parent FROM $wpdb->posts WHERE post_type = 'page'");
		$children = array();

--
	$query = "SELECT ID FROM $wpdb->posts WHERE 1=1";
	$args = array();

--
		return (int) $wpdb->get_var( $wpdb->prepare($query, $args) );

	return 0;
--
	$keys = $wpdb->get_col( "
			SELECT meta_key
			FROM $wpdb->postmeta
			GROUP BY meta_key
			ORDER BY meta_key" );
--
	return $wpdb->get_results( $wpdb->prepare("SELECT meta_key, meta_value, meta_id, post_id
			FROM $wpdb->postmeta WHERE post_id = %d
			ORDER BY meta_key,meta_id", $postid), ARRAY_A );
}
--
	$children = $wpdb->get_col( $wpdb->prepare("
		SELECT post_id
		FROM $wpdb->postmeta
		WHERE meta_key = '_wp_attachment_temp_parent'
		AND meta_value = %d", $old_ID) );
--
		$wpdb->update($wpdb->posts, array('post_parent' => $new_ID), array('ID' => $child_id) );
		delete_post_meta($child_id, '_wp_attachment_temp_parent');
	}
--
	$types = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT post_mime_type FROM $wpdb->posts WHERE post_type = %s", $type));
	return $types;
}
--
	return $where .= " AND {$wpdb->posts}.post_parent < 1";
}

*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/post.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/class-wp-list-table.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/class-wp-list-table.php');
#$aq = convertSQL2pg($aq);
/*
		$months = $wpdb->get_results( $wpdb->prepare( "
			SELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month
			FROM $wpdb->posts
			WHERE post_type = %s
			ORDER BY post_date DESC
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/class-wp-list-table.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/class-wp-ms-users-list-table.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/class-wp-ms-users-list-table.php');
#$aq = convertSQL2pg($aq);
/*
			$args['include'] = $wpdb->get_col( "SELECT ID FROM $wpdb->users WHERE user_login IN ('$logins')" );
		}

*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/class-wp-ms-users-list-table.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/nav-menu.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/nav-menu.php');
#$aq = convertSQL2pg($aq);
/*
	$menu_items_to_delete = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts AS p LEFT JOIN $wpdb->postmeta AS m ON p.ID = m.post_id WHERE post_type = 'nav_menu_item' AND post_status = 'draft' AND meta_key = '_menu_item_orphaned' AND meta_value < '%d'", $delete_timestamp ) );

	foreach( (array) $menu_items_to_delete as $menu_item_id )
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/nav-menu.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/media.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/media.php');
#$aq = convertSQL2pg($aq);
/*
		$attachments = intval( $wpdb->get_var( $wpdb->prepare( "SELECT count(*) FROM $wpdb->posts WHERE post_type = 'attachment' AND post_status != 'trash' AND post_parent = %d", $post_id ) ) );

	if ( empty($attachments) ) {
--
$arc_query = "SELECT DISTINCT YEAR(post_date) AS yyear, MONTH(post_date) AS mmonth FROM $wpdb->posts WHERE post_type = 'attachment' ORDER BY post_date DESC";

$arc_result = $wpdb->get_results( $arc_query );

$month_count = count($arc_result);
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/media.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/export.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/export.php');
#$aq = convertSQL2pg($aq);
/*
		$where = $wpdb->prepare( "{$wpdb->posts}.post_type = %s", $args['content'] );
	} else {
		$post_types = get_post_types( array( 'can_export' => true ) );
--
		$where = $wpdb->prepare( "{$wpdb->posts}.post_type IN (" . implode( ',', $esses ) . ')', $post_types );
	}

--
		$where .= $wpdb->prepare( " AND {$wpdb->posts}.post_status = %s", $args['status'] );
	else
		$where .= " AND {$wpdb->posts}.post_status != 'auto-draft'";

	$join = '';
--
			$join = "INNER JOIN {$wpdb->term_relationships} ON ({$wpdb->posts}.ID = {$wpdb->term_relationships}.object_id)";
			$where .= $wpdb->prepare( " AND {$wpdb->term_relationships}.term_taxonomy_id = %d", $term['term_taxonomy_id'] );
		}
	}
--
			$where .= $wpdb->prepare( " AND {$wpdb->posts}.post_author = %d", $args['author'] );

		if ( $args['start_date'] )
			$where .= $wpdb->prepare( " AND {$wpdb->posts}.post_date >= %s", date( 'Y-m-d', strtotime($args['start_date']) ) );

		if ( $args['end_date'] )
			$where .= $wpdb->prepare( " AND {$wpdb->posts}.post_date < %s", date( 'Y-m-d', strtotime('+1 month', strtotime($args['end_date'])) ) );
	}

--
	$post_ids = $wpdb->get_col( "SELECT ID FROM {$wpdb->posts} $join WHERE $where" );

	// get the requested terms ready, empty unless posts filtered by category or all content
--
		$results = $wpdb->get_results( "SELECT DISTINCT post_author FROM $wpdb->posts WHERE post_status != 'auto-draft'" );
		foreach ( (array) $results as $result )
			$authors[] = get_userdata( $result->post_author );
--
	$posts = $wpdb->get_results( "SELECT * FROM {$wpdb->posts} $where" );

	// Begin Loop
--
<?php	$postmeta = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->postmeta WHERE post_id = %d", $post->ID ) );
		foreach ( $postmeta as $meta ) :
			if ( apply_filters( 'wxr_export_skip_postmeta', false, $meta->meta_key, $meta ) )
--
<?php	$comments = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_approved <> 'spam'", $post->ID ) );
		foreach ( $comments as $c ) : ?>
		<wp:comment>
--
<?php		$c_meta = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->commentmeta WHERE comment_id = %d", $c->comment_ID ) );
			foreach ( $c_meta as $meta ) : ?>
			<wp:commentmeta>
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/export.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/class-wp-ms-sites-list-table.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/class-wp-ms-sites-list-table.php');
#$aq = convertSQL2pg($aq);
/*
		$query = "SELECT * FROM {$wpdb->blogs} WHERE site_id = '{$wpdb->siteid}' ";

		if ( empty($s) ) {
--
			$reg_blog_ids = $wpdb->get_col( "SELECT blog_id FROM {$wpdb->registration_log} WHERE {$wpdb->registration_log}.IP ILIKE ( '{$like_s}$wild' )" );

			if ( !$reg_blog_ids )
--
				FROM {$wpdb->blogs}
				WHERE site_id = '{$wpdb->siteid}'
				AND {$wpdb->blogs}.blog_id IN (" . implode( ', ', $reg_blog_ids ) . ")";
		} else {
			if ( is_numeric($s) && empty( $wild ) ) {
				$query .= " AND ( {$wpdb->blogs}.blog_id = '{$like_s}' )";
			} elseif ( is_subdomain_install() ) {
				$blog_s = str_replace( '.' . $current_site->domain, '', $like_s );
--
				$query .= " AND ( {$wpdb->blogs}.domain ILIKE '$blog_s' ) ";
			} else {
				if ( $like_s != trim('/', $current_site->path) )
--
				$query .= " AND  ( {$wpdb->blogs}.path ILIKE '$blog_s' )";
			}
		}
--
			$total = $wpdb->get_var( str_replace( 'SELECT *', 'SELECT COUNT( blog_id )', $query ) );

		$query .= " LIMIT " . intval( ( $pagenum - 1 ) * $per_page ) . ", " . intval( $per_page );
		$this->items = $wpdb->get_results( $query, ARRAY_A );

		if ( wp_is_large_network() )
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/class-wp-ms-sites-list-table.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/class-wp-posts-list-table.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/class-wp-posts-list-table.php');
#$aq = convertSQL2pg($aq);
/*
			$this->user_posts_count = $wpdb->get_var( $wpdb->prepare( "
				SELECT COUNT( 1 ) FROM $wpdb->posts
				WHERE post_type = %s AND post_status NOT IN ( '" . implode( "','", $exclude_states ) . "' )
				AND post_author = %d
--
			$this->sticky_posts_count = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT( 1 ) FROM $wpdb->posts WHERE post_type = %s AND post_status NOT IN ('trash', 'auto-draft') AND ID IN ($sticky_posts)", $post_type ) );
		}
	}
--
					$wpdb->update( $wpdb->posts, array( 'post_parent' => 0 ), array( 'ID' => $page->ID ) );
					clean_post_cache( $page );
				}
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/class-wp-posts-list-table.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/template.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/template.php');
#$aq = convertSQL2pg($aq);
/*
	$keys = $wpdb->get_col( "
		SELECT meta_key
		FROM $wpdb->postmeta
		GROUP BY meta_key
		HAVING meta_key NOT ILIKE '\_%'
--
	$items = $wpdb->get_results( $wpdb->prepare("SELECT ID, post_parent, post_title FROM $wpdb->posts WHERE post_parent = %d AND post_type = 'page' ORDER BY menu_order", $parent) );

	if ( $items ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/template.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/schema.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/schema.php');
#$aq = convertSQL2pg($aq);
/*
$charset_collate = $wpdb->get_charset_collate();

/**
--
    if (!empty($wpdb->charset))
        $charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
    if (!empty($wpdb->collate))
        $charset_collate .= " COLLATE $wpdb->collate";

    if ($blog_id && $blog_id != $wpdb->blogid)
        $old_blog_id = $wpdb->set_blog_id($blog_id);

    // Engage multisite if in the middle of turning it on from network.php.
--
    $blog_tables = "CREATE TABLE $wpdb->terms (
 term_id bigserial,
 name varchar(200) NOT NULL default '',
--
CREATE INDEX name ON $wpdb->terms USING btree (name);

CREATE TABLE $wpdb->term_taxonomy (
 term_taxonomy_id bigserial,
 term_id bigint  NOT NULL default 0,
--
CREATE INDEX taxonomy ON $wpdb->term_taxonomy USING btree (taxonomy);

CREATE TABLE $wpdb->term_relationships (
 object_id bigint NOT NULL default 0,
 term_taxonomy_id bigint NOT NULL default 0,
--
CREATE INDEX term_taxonomy_id ON $wpdb->term_relationships USING btree (term_taxonomy_id);

CREATE TABLE $wpdb->commentmeta (
  meta_id bigserial,
  comment_id bigint NOT NULL default '0',
--
CREATE INDEX comment_id ON $wpdb->commentmeta USING btree (comment_id);
CREATE INDEX p4meta_key ON $wpdb->commentmeta USING btree (meta_key);


CREATE TABLE $wpdb->comments (
  comment_ID bigserial,
  comment_post_ID bigint NOT NULL default '0',
--
CREATE INDEX comment_post_ID ON $wpdb->comments USING btree (comment_post_ID);
CREATE INDEX comment_approved_date_gmt ON $wpdb->comments USING btree (comment_approved,comment_date_gmt);
CREATE INDEX comment_date_gmt ON $wpdb->comments USING btree (comment_date_gmt);
CREATE INDEX comment_parent ON $wpdb->comments USING btree (comment_parent);


CREATE TABLE $wpdb->links (
  link_id bigserial,
  link_url varchar(255) NOT NULL default '',
--
CREATE INDEX link_visible ON $wpdb->links USING btree (link_visible);

CREATE TABLE $wpdb->options (
  option_id bigserial,
  option_name varchar(64) NOT NULL default '',
--
CREATE TABLE $wpdb->postmeta (
  meta_id bigserial,
  post_id bigint NOT NULL default '0',
--
CREATE INDEX post_id ON $wpdb->postmeta USING btree (post_id);
CREATE INDEX p3meta_key ON $wpdb->postmeta USING btree (meta_key);

CREATE TABLE $wpdb->posts (
  ID bigserial,
  post_author bigint NOT NULL default '0',
--
CREATE INDEX post_name ON $wpdb->posts USING btree (post_name);
CREATE INDEX type_status_date ON $wpdb->posts USING btree (post_type,post_status,post_date,ID);
CREATE INDEX post_parent ON $wpdb->posts USING btree (post_parent);
CREATE INDEX post_author ON $wpdb->posts USING btree (post_author);
";

--
    $users_single_table = "CREATE TABLE $wpdb->users (
  ID bigserial,
  user_login varchar(60) NOT NULL default '',
--
CREATE INDEX user_login_key ON $wpdb->users USING btree (user_login);
CREATE INDEX user_nicename ON $wpdb->users USING btree (user_nicename);

";
--
    $users_multi_table = "CREATE TABLE $wpdb->users (
  ID bigserial,
  user_login varchar(60) NOT NULL default '',
--
CREATE INDEX user_login_key ON $wpdb->users USING btree (user_login);
CREATE INDEX user_nicename ON $wpdb->users USING btree (user_nicename);
";

--
    $usermeta_table = "CREATE TABLE $wpdb->usermeta (
  umeta_id bigserial,
  user_id bigint  NOT NULL default '0',
--
CREATE INDEX user_id ON $wpdb->usermeta USING btree (user_id);
CREATE INDEX p2meta_key ON $wpdb->usermeta USING btree (meta_key);
";

--
    $ms_global_tables = "CREATE TABLE $wpdb->blogs (
  blog_id bigserial,
  site_id bigint NOT NULL default '0',
--
CREATE INDEX domain ON $wpdb->blogs USING btree (domain(50),path(5));
CREATE INDEX lang_id ON $wpdb->blogs USING btree (lang_id);

CREATE TABLE $wpdb->blog_versions (
  blog_id bigint NOT NULL default '0',
  db_version varchar(20) NOT NULL default '',
--
CREATE INDEX db_version ON $wpdb->blog_versions USING btree (db_version);

CREATE TABLE $wpdb->registration_log (
  ID bigserial,
  email varchar(255) NOT NULL default '',
--
CREATE INDEX IP ON $wpdb->registration_log USING btree (IP);

CREATE TABLE $wpdb->site (
  id bigserial,
  domain varchar(200) NOT NULL default '',
--
CREATE INDEX domain ON $wpdb->site USING btree (domain,path);

CREATE TABLE $wpdb->sitemeta (
  meta_id bigserial,
  site_id bigint NOT NULL default '0',
--
CREATE INDEX p1meta_key ON $wpdb->sitemeta USING btree (meta_key);
CREATE INDEX site_id ON $wpdb->sitemeta USING btree (site_id);

CREATE TABLE $wpdb->signups (
  signup_id bigserial,
  domain varchar(200) NOT NULL default '',
--
CREATE INDEX activation_key ON $wpdb->signups USING btree (activation_key);
CREATE INDEX user_email ON $wpdb->signups USING btree (user_email);
CREATE INDEX user_login_email ON $wpdb->signups USING btree (user_login,user_email);
CREATE INDEX domain_path ON $wpdb->signups USING btree (domain,path);
";

--
        $wpdb->set_blog_id($old_blog_id);

    return $queries;
--
    $existing_options = $wpdb->get_col("SELECT option_name FROM $wpdb->options WHERE option_name in ( $keys )");

    $insert = '';
--
        $insert .= $wpdb->prepare("(%s, %s, %s)", $option, $value, $autoload);
    }

--
        $wpdb->query("INSERT INTO $wpdb->options (option_name, option_value, autoload) VALUES " . $insert);

    // in case it is set, but blank, update "home"
--
    //$wpdb->query("DELETE FROM $wpdb->options WHERE option_name ~ ^rss_[0-9a-f]{32}(_ts)?$");
    $wpdb->query("DELETE FROM $wpdb->options WHERE option_name ilike 'rss_%'");

    // Deletes all expired transients.
--
//    $wpdb->query("DELETE a, b FROM $wpdb->options a, $wpdb->options b WHERE
//	        a.option_name ILIKE '\_transient\_%' AND
//	        a.option_name NOT ILIKE '\_transient\_timeout\_%' AND
--
    $wpdb->query("DELETE  FROM $wpdb->options WHERE option_id IN(
              SELECT a.option_id
              FROM $wpdb->options a, $wpdb->options b
              WHERE a.option_name ILIKE '_transient_%'
              AND a.option_name NOT ILIKE '_transient_timeout_%'
--
              FROM $wpdb->options a, $wpdb->options b
              WHERE a.option_name ILIKE '_transient_%'
              AND a.option_name NOT ILIKE '_transient_timeout_%'
--
//        $wpdb->query("DELETE a, b FROM $wpdb->options a, $wpdb->options b WHERE
//			a.option_name ILIKE '\_site\_transient\_%' AND
//			a.option_name NOT ILIKE '\_site\_transient\_timeout\_%' AND
--
        $wpdb->query("DELETE FROM $wpdb->options
            WHERE option_id IN (
			SELECT a.option_id
			FROM $wpdb->options a, $wpdb->options b
			 WHERE a.option_name ILIKE '_site_transient_%'
			  AND a.option_name NOT ILIKE '_site_transient_timeout_%'
--
			FROM $wpdb->options a, $wpdb->options b
			 WHERE a.option_name ILIKE '_site_transient_%'
			  AND a.option_name NOT ILIKE '_site_transient_timeout_%'
--
    if ($network_id == $wpdb->get_var($wpdb->prepare("SELECT id FROM $wpdb->site WHERE id = %d", $network_id)))
        $errors->add('siteid_exists', __('The network already exists.'));

--
        $wpdb->insert($wpdb->site, array('domain' => $domain, 'path' => $path));
        $network_id = $wpdb->insert_id;
    } else {
        $wpdb->insert($wpdb->site, array('domain' => $domain, 'path' => $path, 'id' => $network_id));
    }

--
        $insert .= $wpdb->prepare("( %d, %s, %s)", $network_id, $meta_key, $meta_value);
    }
    $wpdb->query("INSERT INTO $wpdb->sitemeta ( site_id, meta_key, meta_value ) VALUES " . $insert);

    // When upgrading from single to multisite, assume the current site will become the main site of the network.
--
        $wpdb->insert($wpdb->blogs, array('site_id' => $network_id, 'blog_id' => 1, 'domain' => $domain, 'path' => $path, 'registered' => current_time('mysql')));
        $current_site->blog_id = $blog_id = $wpdb->insert_id;
        update_user_meta($site_user->ID, 'source_domain', $domain);
        update_user_meta($site_user->ID, 'primary_blog', $blog_id);
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/schema.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/upgrade.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/upgrade.php');
#$aq = convertSQL2pg($aq);
/*
		$cat_id = $wpdb->get_var( $wpdb->prepare( "SELECT cat_ID FROM {$wpdb->sitecategories} WHERE category_nicename = %s", $cat_slug ) );
		if ( $cat_id == null ) {
			$wpdb->insert( $wpdb->sitecategories, array('cat_ID' => 0, 'cat_name' => $cat_name, 'category_nicename' => $cat_slug, 'last_updated' => current_time('mysql', true)) );
			$cat_id = $wpdb->insert_id;
		}
		update_option('default_category', $cat_id);
--
	$wpdb->insert( $wpdb->terms, array('term_id' => $cat_id, 'name' => $cat_name, 'slug' => $cat_slug, 'term_group' => 0) );
	$wpdb->insert( $wpdb->term_taxonomy, array('term_id' => $cat_id, 'taxonomy' => 'category', 'description' => '', 'parent' => 0, 'count' => 1));
	$cat_tt_id = $wpdb->insert_id;

	// First post
--
	$wpdb->insert( $wpdb->posts, array(
								'post_author' => $user_id,
								'post_date' => $now,
--
	$wpdb->insert( $wpdb->term_relationships, array('term_taxonomy_id' => $cat_tt_id, 'object_id' => 1) );

	// Default comment
--
	$wpdb->insert( $wpdb->comments, array(
								'comment_post_ID' => 1,
								'comment_author' => $first_comment_author,
--
	$wpdb->insert( $wpdb->posts, array(
								'post_author' => $user_id,
								'post_date' => $now,
--
	$wpdb->insert( $wpdb->postmeta, array( 'post_id' => 2, 'meta_key' => '_wp_page_template', 'meta_value' => 'default' ) );

	// Set up default widgets for default theme.
--
		$wpdb->update( $wpdb->options, array('option_value' => $user->user_email), array('option_name' => 'admin_email') );

		// Remove all perms except for the login user.
		$wpdb->query( $wpdb->prepare("DELETE FROM $wpdb->usermeta WHERE user_id != %d AND meta_key = %s", $user_id, $table_prefix.'user_level') );
		$wpdb->query( $wpdb->prepare("DELETE FROM $wpdb->usermeta WHERE user_id != %d AND meta_key = %s", $user_id, $table_prefix.'capabilities') );

		// Delete any caps that snuck into the previously active blog. (Hardcoded to blog 1 for now.) TODO: Get previous_blog_id.
--
			$wpdb->delete( $wpdb->usermeta, array( 'user_id' => $user_id , 'meta_key' => $wpdb->base_prefix.'1_capabilities' ) );
	}
}
--
		if ( $wpdb->get_row( "SELECT blog_id FROM {$wpdb->blog_versions} WHERE blog_id = '{$wpdb->blogid}'" ) )
			$wpdb->query( "UPDATE {$wpdb->blog_versions} SET db_version = '{$wp_db_version}' WHERE blog_id = '{$wpdb->blogid}'" );
		else
			$wpdb->query( "INSERT INTO {$wpdb->blog_versions} ( \"blog_id\" , \"db_version\" , \"last_updated\" ) VALUES ( '{$wpdb->blogid}', '{$wp_db_version}', NOW());" );
	}
}
--
	$posts = $wpdb->get_results("SELECT ID, post_title, post_name FROM $wpdb->posts WHERE post_name = ''");
	if ($posts) {
		foreach($posts as $post) {
--
				$wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET post_name = %s WHERE ID = %d", $newtitle, $post->ID) );
			}
		}
--
	$categories = $wpdb->get_results("SELECT cat_ID, cat_name, category_nicename FROM $wpdb->categories");
	foreach ($categories as $category) {
		if ('' == $category->category_nicename) {
--
			$wpdb->update( $wpdb->categories, array('category_nicename' => $newtitle), array('cat_ID' => $category->cat_ID) );
		}
	}
--
	$wpdb->query("UPDATE $wpdb->options SET option_value = REPLACE(option_value, 'wp-links/links-images/', 'wp-images/links/')
	WHERE option_name ILIKE 'links_rating_image%'
	AND option_value ILIKE 'wp-links/links-images/%'");
--
	$done_ids = $wpdb->get_results("SELECT DISTINCT post_id FROM $wpdb->post2cat");
	if ($done_ids) :
		foreach ($done_ids as $done_id) :
--
	$allposts = $wpdb->get_results("SELECT ID, post_category FROM $wpdb->posts WHERE post_category != '0' $catwhere");
	if ($allposts) :
		foreach ($allposts as $post) {
--
			$cat = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->post2cat WHERE post_id = %d AND category_id = %d", $post->ID, $post->post_category) );
			if (!$cat && 0 != $post->post_category) { // If there's no result
				$wpdb->insert( $wpdb->post2cat, array('post_id' => $post->ID, 'category_id' => $post->post_category) );
			}
		}
--
	add_clean_index($wpdb->posts, 'post_name');
	add_clean_index($wpdb->posts, 'post_status');
	add_clean_index($wpdb->categories, 'category_nicename');
	add_clean_index($wpdb->comments, 'comment_approved');
	add_clean_index($wpdb->comments, 'comment_post_ID');
	add_clean_index($wpdb->links , 'link_category');
	add_clean_index($wpdb->links , 'link_visible');
}

--
	$users = $wpdb->get_results("SELECT ID, user_nickname, user_nicename FROM $wpdb->users");
	foreach ($users as $user) {
		if ('' == $user->user_nicename) {
--
			$wpdb->update( $wpdb->users, array('user_nicename' => $newname), array('ID' => $user->ID) );
		}
	}
--
	$users = $wpdb->get_results("SELECT ID, user_pass from $wpdb->users");
	foreach ($users as $row) {
		if (!preg_match('/^[A-Fa-f0-9]{32}$/', $row->user_pass)) {
			$wpdb->update( $wpdb->users, array('user_pass' => md5($row->user_pass)), array('ID' => $row->ID) );
		}
	}
--
	$got_gmt_fields = ! ($wpdb->get_var("SELECT MAX(post_date_gmt) FROM $wpdb->posts") == '0000-00-00 00:00:00');

	if (!$got_gmt_fields) {
--
		$wpdb->query("UPDATE $wpdb->posts SET post_date_gmt = DATE_ADD(post_date, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)");
		$wpdb->query("UPDATE $wpdb->posts SET post_modified = post_date");
		$wpdb->query("UPDATE $wpdb->posts SET post_modified_gmt = DATE_ADD(post_modified, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE) WHERE post_modified != '0000-00-00 00:00:00'");
		$wpdb->query("UPDATE $wpdb->comments SET comment_date_gmt = DATE_ADD(comment_date, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)");
		$wpdb->query("UPDATE $wpdb->users SET user_registered = DATE_ADD(user_registered, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)");
	}

--
	$posts = $wpdb->get_results("SELECT ID, post_title, post_content, post_excerpt, guid, post_date, post_name, post_status, post_author FROM $wpdb->posts");
	if ($posts) {
		foreach($posts as $post) {
--
			$wpdb->update( $wpdb->posts, compact('post_title', 'post_content', 'post_excerpt', 'guid'), array('ID' => $post->ID) );

		}
--
	$comments = $wpdb->get_results("SELECT comment_ID, comment_author, comment_content FROM $wpdb->comments");
	if ($comments) {
		foreach($comments as $comment) {
--
			$wpdb->update($wpdb->comments, compact('comment_content', 'comment_author'), array('comment_ID' => $comment->comment_ID) );
		}
	}
--
	$links = $wpdb->get_results("SELECT link_id, link_name, link_description FROM $wpdb->links");
	if ($links) {
		foreach($links as $link) {
--
			$wpdb->update( $wpdb->links, compact('link_name', 'link_description'), array('link_id' => $link->link_id) );
		}
	}
--
	$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'optionvalues');
	$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'optiontypes');
	$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'optiongroups');
	$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'optiongroup_options');

	// Update comments table to use comment_type
	$wpdb->query("UPDATE $wpdb->comments SET comment_type='trackback', comment_content = REPLACE(comment_content, '<trackback />', '') WHERE comment_content ILIKE '<trackback />%'");
	$wpdb->query("UPDATE $wpdb->comments SET comment_type='pingback', comment_content = REPLACE(comment_content, '<pingback />', '') WHERE comment_content ILIKE '<pingback />%'");

	// Some versions have multiple duplicate option_name rows with the same values
	$options = $wpdb->get_results("SELECT option_name, COUNT(option_name) AS dupes FROM \"$wpdb->options\" GROUP BY option_name");
	foreach ( $options as $option ) {
		if ( 1 != $option->dupes ) { // Could this be done in the query?
--
			$dupe_ids = $wpdb->get_col( $wpdb->prepare("SELECT option_id FROM $wpdb->options WHERE option_name = %s LIMIT %d", $option->option_name, $limit) );
			if ( $dupe_ids ) {
				$dupe_ids = join($dupe_ids, ',');
				$wpdb->query("DELETE FROM $wpdb->options WHERE option_id IN ($dupe_ids)");
			}
		}
--
	$users = $wpdb->get_results("SELECT * FROM $wpdb->users");
	foreach ( $users as $user ) :
		if ( !empty( $user->user_firstname ) )
--
			update_user_meta( $user->ID, $wpdb->prefix . 'user_level', $user->user_level );
		if ( !empty( $user->user_icq ) )
			update_user_meta( $user->ID, 'icq', wp_slash($user->user_icq) );
--
			$wpdb->update( $wpdb->users, array('display_name' => $id), array('ID' => $user->ID) );
		endif;

--
		$caps = get_user_meta( $user->ID, $wpdb->prefix . 'capabilities');
		if ( empty($caps) || defined('RESET_CAPS') ) {
			$level = get_user_meta($user->ID, $wpdb->prefix . 'user_level', true);
			$role = translate_level_to_role($level);
			update_user_meta( $user->ID, $wpdb->prefix . 'capabilities', array($role => true) );
		}

--
	$wpdb->hide_errors();
	foreach ( $old_user_fields as $old )
		$wpdb->query("ALTER TABLE $wpdb->users DROP $old");
	$wpdb->show_errors();

	// populate comment_count field of posts table
	$comments = $wpdb->get_results( "SELECT comment_post_ID, COUNT(*) as c FROM $wpdb->comments WHERE comment_approved = '1' GROUP BY comment_post_ID" );
	if ( is_array( $comments ) )
		foreach ($comments as $comment)
			$wpdb->update( $wpdb->posts, array('comment_count' => $comment->c), array('ID' => $comment->comment_post_ID) );

	// Some alpha versions used a post status of object instead of attachment and put
--
		$objects = $wpdb->get_results("SELECT ID, post_type FROM $wpdb->posts WHERE post_status = 'object'");
		foreach ($objects as $object) {
			$wpdb->update( $wpdb->posts, array(	'post_status' => 'attachment',
												'post_mime_type' => $object->post_type,
												'post_type' => ''),
--
		$posts = $wpdb->get_results("SELECT ID, post_status FROM $wpdb->posts");

		if ( ! empty($posts) ) foreach ($posts as $post) {
--
			$wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET post_status = %s, post_type = %s WHERE ID = %d", $status, $type, $post->ID) );
		}
	}
--
		$wpdb->query ("UPDATE $wpdb->posts SET post_status = 'future' WHERE post_status = 'publish' AND post_date_gmt > '$now'");

		$posts = $wpdb->get_results("SELECT ID, post_date FROM $wpdb->posts WHERE post_status ='future'");
		if ( !empty($posts) )
			foreach ( $posts as $post )
--
	$categories = $wpdb->get_results("SELECT * FROM $wpdb->categories ORDER BY cat_ID");
	foreach ($categories as $category) {
		$term_id = (int) $category->cat_ID;
--
		if ( $exists = $wpdb->get_results( $wpdb->prepare("SELECT term_id, term_group FROM $wpdb->terms WHERE slug = %s", $slug) ) ) {
			$term_group = $exists[0]->term_group;
			$id = $exists[0]->term_id;
--
				$slug_check = $wpdb->get_var( $wpdb->prepare("SELECT slug FROM $wpdb->terms WHERE slug = %s", $alt_slug) );
			} while ( $slug_check );

--
				$term_group = $wpdb->get_var("SELECT MAX(term_group) FROM $wpdb->terms GROUP BY term_group") + 1;
				$wpdb->query( $wpdb->prepare("UPDATE $wpdb->terms SET term_group = %d WHERE term_id = %d", $term_group, $id) );
			}
		}
--
		$wpdb->query( $wpdb->prepare("INSERT INTO $wpdb->terms (term_id, name, slug, term_group) VALUES
		(%d, %s, %s, %d)", $term_id, $name, $slug, $term_group) );

--
			$wpdb->query( $wpdb->prepare("INSERT INTO $wpdb->term_taxonomy (term_id, taxonomy, description, parent, count) VALUES ( %d, %s, %s, %d, %d)", $term_id, $taxonomy, $description, $parent, $count) );
			$tt_ids[$term_id][$taxonomy] = (int) $wpdb->insert_id;
		}

--
			$wpdb->query( $wpdb->prepare("INSERT INTO $wpdb->term_taxonomy (term_id, taxonomy, description, parent, count) VALUES ( %d, %s, %s, %d, %d)", $term_id, $taxonomy, $description, $parent, $count) );
			$tt_ids[$term_id][$taxonomy] = (int) $wpdb->insert_id;
		}

--
			$wpdb->insert( $wpdb->term_taxonomy, compact('term_id', 'taxonomy', 'description', 'parent', 'count') );
			$tt_ids[$term_id][$taxonomy] = (int) $wpdb->insert_id;
		}

--
			$wpdb->insert( $wpdb->term_taxonomy, compact('term_id', 'taxonomy', 'description', 'parent', 'count') );
			$tt_ids[$term_id][$taxonomy] = (int) $wpdb->insert_id;
		}
	}
--
	$posts = $wpdb->get_results("SELECT $select FROM $wpdb->post2cat GROUP BY post_id, category_id");
	foreach ( $posts as $post ) {
		$post_id = (int) $post->post_id;
--
		$wpdb->insert( $wpdb->term_relationships, array('object_id' => $post_id, 'term_taxonomy_id' => $tt_id) );
	}

--
		$link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM " . $wpdb->prefix . 'linkcategories');
		foreach ( $link_cats as $category) {
			$cat_id = (int) $category->cat_id;
--
			if ( $exists = $wpdb->get_results( $wpdb->prepare("SELECT term_id, term_group FROM $wpdb->terms WHERE slug = %s", $slug) ) ) {
				$term_group = $exists[0]->term_group;
				$term_id = $exists[0]->term_id;
--
				$wpdb->insert( $wpdb->terms, compact('name', 'slug', 'term_group') );
				$term_id = (int) $wpdb->insert_id;
			}

--
			$wpdb->insert( $wpdb->term_taxonomy, array('term_id' => $term_id, 'taxonomy' => 'link_category', 'description' => '', 'parent' => 0, 'count' => 0) );
			$tt_ids[$term_id] = (int) $wpdb->insert_id;
		}

--
		$links = $wpdb->get_results("SELECT link_id, link_category FROM $wpdb->links");
		if ( !empty($links) ) foreach ( $links as $link ) {
			if ( 0 == $link->link_category )
--
			$wpdb->insert( $wpdb->term_relationships, array('object_id' => $link->link_id, 'term_taxonomy_id' => $tt_id) );
		}

--
		$links = $wpdb->get_results("SELECT link_id, category_id FROM $wpdb->link2cat GROUP BY link_id, category_id");
		foreach ( $links as $link ) {
			$link_id = (int) $link->link_id;
--
			$wpdb->insert( $wpdb->term_relationships, array('object_id' => $link_id, 'term_taxonomy_id' => $tt_id) );
		}
	}
--
		$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'linkcategories');
	}

--
	$terms = $wpdb->get_results("SELECT term_taxonomy_id, taxonomy FROM $wpdb->term_taxonomy");
	foreach ( (array) $terms as $term ) {
		if ( ('post_tag' == $term->taxonomy) || ('category' == $term->taxonomy) )
			$count = $wpdb->get_var( $wpdb->prepare("SELECT COUNT(*) FROM $wpdb->term_relationships, $wpdb->posts WHERE $wpdb->posts.ID = $wpdb->term_relationships.object_id AND post_status = 'publish' AND post_type = 'post' AND term_taxonomy_id = %d", $term->term_taxonomy_id) );
		else
			$count = $wpdb->get_var( $wpdb->prepare("SELECT COUNT(*) FROM $wpdb->term_relationships WHERE term_taxonomy_id = %d", $term->term_taxonomy_id) );
		$wpdb->update( $wpdb->term_taxonomy, array('count' => $count), array('term_taxonomy_id' => $term->term_taxonomy_id) );
	}
}
--
	$wpdb->hide_errors();
	foreach ( $old_options_fields as $old )
		$wpdb->query("ALTER TABLE $wpdb->options DROP $old");
	$wpdb->show_errors();
}

--
	$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'categories');
	$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'link2cat');
	$wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'post2cat');
}

--
	$wpdb->query("UPDATE $wpdb->postmeta SET meta_key = '_wp_old_slug' WHERE meta_key = 'old_slug'");
}

--
	$wpdb->query("UPDATE $wpdb->users SET user_activation_key = ''");
}

--
		$wpdb->query( "UPDATE $wpdb->posts SET post_date = post_modified WHERE post_date = '0000-00-00 00:00:00'" );
}

--
		while( $rows = $wpdb->get_results( "SELECT option_name, option_value FROM $wpdb->options ORDER BY option_id LIMIT $start, 20" ) ) {
			foreach( $rows as $row ) {
				$value = $row->option_value;
--
		refresh_blog_details( $wpdb->blogid );
	}
}
--
		$prefix = like_escape($wpdb->base_prefix);
		$wpdb->query( "DELETE FROM $wpdb->usermeta WHERE meta_key ILIKE '{$prefix}%meta-box-hidden%' OR meta_key ILIKE '{$prefix}%closedpostboxes%' OR meta_key ILIKE '{$prefix}%manage-%-columns-hidden%' OR meta_key ILIKE '{$prefix}%meta-box-order%' OR meta_key ILIKE '{$prefix}%metaboxorder%' OR meta_key ILIKE '{$prefix}%screen_layout%'
					 OR meta_key = 'manageedittagscolumnshidden' OR meta_key='managecategoriescolumnshidden' OR meta_key = 'manageedit-tagscolumnshidden' OR meta_key = 'manageeditcolumnshidden' OR meta_key = 'categories_per_page' OR meta_key = 'edit_tags_per_page'" );
	}
--
		$wpdb->query( "DELETE FROM $wpdb->usermeta WHERE meta_key IN ('show_admin_bar_admin', 'plugins_last_view')" );
	}

--
		$wpdb->hide_errors();
		$wpdb->query( "ALTER TABLE $wpdb->options DROP COLUMN blog_id" );
		$wpdb->show_errors();
	}

--
		$wpdb->hide_errors();
		$wpdb->query("ALTER TABLE $wpdb->comments DROP INDEX comment_approved");
		$wpdb->show_errors();
	}

--
		$wpdb->query( "DELETE FROM $wpdb->usermeta WHERE meta_key = 'themes_last_view'" );
	}

--
		if ( 'yes' == $wpdb->get_var( "SELECT autoload FROM $wpdb->options WHERE option_name = 'uninstall_plugins'" ) ) {
			$uninstall_plugins = get_option( 'uninstall_plugins' );
			delete_option( 'uninstall_plugins' );
--
	if ( $wp_current_db_version < 22006 && $wpdb->get_var( "SELECT link_id FROM $wpdb->links LIMIT 1" ) )
		update_option( 'link_manager_enabled', 1 ); // Previously set to 0 by populate_options()

--
			$wpdb->query( "DELETE FROM $wpdb->usermeta WHERE meta_key IN ('$meta_keys')" );
		}
	}
--
//		$wpdb->query("DELETE a, b FROM $wpdb->sitemeta a, $wpdb->sitemeta b WHERE
//			a.meta_key ILIKE '\_site\_transient\_%' AND
//			a.meta_key NOT ILIKE '\_site\_transient\_timeout\_%' AND
--
        $wpdb->query("DELETE FROM $wpdb->sitemeta
            WHERE meta_id in (
              SELECT a.meta_id FROM $wpdb->sitemeta a, $wpdb->sitemeta b
              WHERE a.meta_key ILIKE '_site_transient_%'
              AND a.meta_key NOT ILIKE '_site_transient_timeout_%'
--
			  SELECT b.meta_id FROM $wpdb->sitemeta a, $wpdb->sitemeta b
              WHERE a.meta_key ILIKE '_site_transient_%'
              AND a.meta_key NOT ILIKE '_site_transient_timeout_%'
--
		while( $rows = $wpdb->get_results( "SELECT meta_key, meta_value FROM {$wpdb->sitemeta} ORDER BY meta_id LIMIT $start, 20" ) ) {
			foreach( $rows as $row ) {
				$value = $row->meta_value;
--
	if ( $wpdb->get_var($wpdb->ShowTables($table_name)) == $table_name )
		return true;
	//didn't find it try to create it.
	$q = $wpdb->query($create_ddl);
	// we cannot directly tell that whether this succeeded!
	if ( $wpdb->get_var($wpdb->ShowTables($table_name)) == $table_name)
		return true;
	return false;
--
	$wpdb->hide_errors();
	$wpdb->query("ALTER TABLE \"$table\" DROP INDEX \"$index\"");
	// Now we need to take out all the extra ones we may have created
	for ($i = 0; $i < 25; $i++) {
		$wpdb->query("ALTER TABLE \"$table\" DROP INDEX \"{$index}_$i\"");
	}
	$wpdb->show_errors();
	return true;
}
--
	$wpdb->query("ALTER TABLE \"$table\" ADD INDEX ( \"$index\" )");
	return true;
}
--
	foreach ($wpdb->get_col("DESC $table_name", 0) as $column ) {
		if ($column == $column_name) {
			return true;
--
	$q = $wpdb->query($create_ddl);
	// we cannot directly tell that whether this succeeded!
	foreach ($wpdb->get_col("DESC $table_name", 0) as $column ) {
		if ($column == $column_name) {
			return true;
--
	if ( $options = $wpdb->get_results( "SELECT option_name, option_value FROM $wpdb->options" ) ) {
		foreach ( $options as $option ) {
			if ( 'siteurl' == $option->option_name || 'home' == $option->option_name || 'category_base' == $option->option_name )
--
	$option = $wpdb->get_var( $wpdb->prepare("SELECT option_value FROM $wpdb->options WHERE option_name = %s", $setting ) );

	if ( 'home' == $setting && '' == $option )
--
	$global_tables = $wpdb->tables( 'global' );
	foreach ( $cqueries as $table => $qry ) {
		// Upgrade global tables only for the main site. Don't upgrade at all if DO_NOT_UPGRADE_GLOBAL_TABLES is defined.
--
		$suppress = $wpdb->suppress_errors();
//		$tablefields = $wpdb->get_results("DESCRIBE {$table};");
//		$tablefields = $wpdb->get_results($wpdb->describe('public.teste'));
		$tablefields = $wpdb->get_results($wpdb->describe($table));
		$wpdb->suppress_errors( $suppress );

		if ( ! $tablefields )
--
//		$tableindices = $wpdb->get_results("SHOW INDEX FROM {$table};");
		$tableindices = $wpdb->get_results($wpdb->show_index($table));

		if ($tableindices) {
--
			$wpdb->query($query);
		}
	}
--
	$result = $wpdb->check_database_version();
	if ( is_wp_error( $result ) )
		die( $result->get_error_message() );
--
	if ( $wp_current_db_version >= 22006 && get_option( 'link_manager_enabled' ) && ! $wpdb->get_var( "SELECT link_id FROM $wpdb->links LIMIT 1" ) )
		update_option( 'link_manager_enabled', 0 );
}
--
		$wpdb->query("DELETE o1 FROM $wpdb->options AS o1 JOIN $wpdb->options AS o2 USING (\"option_name\") WHERE o2.option_id > o1.option_id");

		// Drop the old primary key and add the new.
		$wpdb->query("ALTER TABLE $wpdb->options DROP PRIMARY KEY, ADD PRIMARY KEY(option_id)");

		// Drop the old option_name index. dbDelta() doesn't do the drop.
		$wpdb->query("ALTER TABLE $wpdb->options DROP INDEX option_name");
	}

--
			$wpdb->query( "ALTER TABLE $wpdb->signups ADD signup_id BIGINT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST" );
			$wpdb->query( "ALTER TABLE $wpdb->signups DROP INDEX domain" );
		}

--
			$wpdb->query( "ALTER TABLE $wpdb->blogs CHANGE COLUMN archived archived varchar(1) NOT NULL default '0'" );
			$wpdb->query( "ALTER TABLE $wpdb->blogs CHANGE COLUMN archived archived tinyint(2) NOT NULL default 0" );
		}
	}
--
CREATE TABLE $wpdb->sitecategories (
  cat_ID bigserial,
  cat_name varchar(55) NOT NULL default '',
--
CREATE INDEX category_nicename ON $wpdb->sitecategories USING btree (category_nicename);
CREATE INDEX last_update ON $wpdb->sitecategories USING btree (last_updated);
";
// now create tables
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/upgrade.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/deprecated.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/deprecated.php');
#$aq = convertSQL2pg($aq);
/*
		$level_key = $wpdb->get_blog_prefix() . 'user_level';
	else
		$level_key = $wpdb->get_blog_prefix() . 'capabilities'; // wpmu site admins don't have user_levels

	return $wpdb->get_col( $wpdb->prepare("SELECT user_id FROM $wpdb->usermeta WHERE meta_key = %s AND meta_value != '0'", $level_key) );
}

--
		$authors = $wpdb->get_results( "SELECT * FROM $wpdb->users WHERE ID IN ($editable) ORDER BY display_name" );
	}

--
		$level_key = $wpdb->get_blog_prefix() . 'user_level';
	else
		$level_key = $wpdb->get_blog_prefix() . 'capabilities'; // wpmu site admins don't have user_levels

	$query = $wpdb->prepare("SELECT user_id FROM $wpdb->usermeta WHERE meta_key = %s", $level_key);
	if ( $exclude_zeros )
		$query .= " AND meta_value != '0'";
--
	return $wpdb->get_col( $query );
}

--
		$level_key = $wpdb->get_blog_prefix() . 'user_level';
	else
		$level_key = $wpdb->get_blog_prefix() . 'capabilities'; // wpmu site admins don't have user_levels

	return $wpdb->get_col( $wpdb->prepare("SELECT user_id FROM $wpdb->usermeta WHERE meta_key = %s AND meta_value = '0'", $level_key) );
}

--
		$this->query_limit = $wpdb->prepare(" LIMIT %d, %d", $this->first_user, $this->users_per_page);
		$this->query_orderby = ' ORDER BY user_login';

--
				$searches[] = $wpdb->prepare( $col . ' ILIKE %s', '%' . like_escape($this->search_term) . '%' );
			$search_sql .= implode(' OR ', $searches);
			$search_sql .= ')';
--
		$this->query_from = " FROM $wpdb->users";
		$this->query_where = " WHERE 1=1 $search_sql";

--
			$this->query_from .= " INNER JOIN $wpdb->usermeta ON $wpdb->users.ID = $wpdb->usermeta.user_id";
			$this->query_where .= $wpdb->prepare(" AND $wpdb->usermeta.meta_key = '{$wpdb->prefix}capabilities' AND $wpdb->usermeta.meta_value ILIKE %s", '%' . $this->role . '%');
		} elseif ( is_multisite() ) {
			$level_key = $wpdb->prefix . 'capabilities'; // wpmu site admins don't have user_levels
			$this->query_from .= ", $wpdb->usermeta";
			$this->query_where .= " AND $wpdb->users.ID = $wpdb->usermeta.user_id AND meta_key = '{$level_key}'";
		}

--
		$this->results = $wpdb->get_col("SELECT DISTINCT($wpdb->users.ID)" . $this->query_from . $this->query_where . $this->query_orderby . $this->query_limit);

		if ( $this->results )
			$this->total_users_for_query = $wpdb->get_var("SELECT COUNT(DISTINCT($wpdb->users.ID))" . $this->query_from . $this->query_where); // no limit
		else
			$this->search_errors = new WP_Error('no_matching_users_found', __('No matching users were found!'));
--
		$other_unpubs = $wpdb->get_results( $wpdb->prepare("SELECT ID, post_title, post_author FROM $wpdb->posts WHERE post_type = 'post' AND $type_sql AND post_author IN ($editable) AND post_author != %d ORDER BY post_modified $dir", $user_id) );
	}

*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/deprecated.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/update-core.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/update-core.php');
#$aq = convertSQL2pg($aq);
/*
	$mysql_version  = $wpdb->db_version();
	$old_wp_version = $GLOBALS['wp_version']; // The version of WordPress we're updating from
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' )  ); // a dash in the version indicates a Development release
--
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
		$mysql_compat = true;
	else
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/update-core.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/comment.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/comment.php');
#$aq = convertSQL2pg($aq);
/*
	return $wpdb->get_var( $wpdb->prepare("SELECT comment_post_ID FROM $wpdb->comments
			WHERE comment_author = %s AND comment_date = %s", $comment_author, $comment_date) );
}
--
	$pending = $wpdb->get_results( "SELECT comment_post_ID, COUNT(comment_ID) as num_comments FROM $wpdb->comments WHERE comment_post_ID IN ( $post_id_in ) AND comment_approved = '0' GROUP BY comment_post_ID", ARRAY_A );

	if ( $single ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/comment.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/class-wp-importer.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/class-wp-importer.php');
#$aq = convertSQL2pg($aq);
/*
			$sql = $wpdb->prepare( "SELECT post_id, meta_value FROM $wpdb->postmeta WHERE meta_key = '%s' LIMIT %d,%d", $meta_key, $offset, $limit );
			$results = $wpdb->get_results( $sql );

			// Increment offset
--
		$sql = $wpdb->prepare( "SELECT COUNT( post_id ) AS cnt FROM $wpdb->postmeta WHERE meta_key = '%s'", $meta_key );

		$result = $wpdb->get_results( $sql );

		if ( !empty( $result ) )
--
			$sql = $wpdb->prepare( "SELECT comment_ID, comment_agent FROM $wpdb->comments LIMIT %d,%d", $offset, $limit );
			$results = $wpdb->get_results( $sql );

			// Increment offset
--
		$wpdb->queries = array();
		// Reset $wp_actions to keep it from growing out of control
		$wp_actions = array();
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/class-wp-importer.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/class-wp-media-list-table.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/class-wp-media-list-table.php');
#$aq = convertSQL2pg($aq);
/*
		$total_orphans = $wpdb->get_var( "SELECT COUNT( * ) FROM $wpdb->posts WHERE post_type = 'attachment' AND post_status != 'trash' AND post_parent < 1" );
		$matches = wp_match_mime_types(array_keys($post_mime_types), array_keys($_num_posts));
		foreach ( $matches as $type => $reals )
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/class-wp-media-list-table.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/class-wp-upgrader.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/class-wp-upgrader.php');
#$aq = convertSQL2pg($aq);
/*
			if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
				$mysql_compat = true;
			else
				$mysql_compat = version_compare( $wpdb->db_version(), $item->mysql_version, '>=' );

			if ( ! $php_compat || ! $mysql_compat )
--
		$lock_result = $wpdb->query( $wpdb->prepare( "INSERT IGNORE INTO \"$wpdb->options\" ( \"option_name\", \"option_value\", \"autoload\" ) VALUES (%s, %s, 'no') /* LOCK */", $lock_name, time() ) );

		if ( ! $lock_result ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/class-wp-upgrader.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/includes/bookmark.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/includes/bookmark.php');
#$aq = convertSQL2pg($aq);
/*
	$wpdb->delete( $wpdb->links, array( 'link_id' => $link_id ) );
	/**
	 * Fires after a link has been deleted.
--
		if ( false === $wpdb->update( $wpdb->links, compact('link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible', 'link_rating', 'link_rel', 'link_notes', 'link_rss'), compact('link_id') ) ) {
			if ( $wp_error )
				return new WP_Error( 'db_update_error', __( 'Could not update link in the database' ), $wpdb->last_error );
			else
				return 0;
--
		if ( false === $wpdb->insert( $wpdb->links, compact('link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible', 'link_owner', 'link_rating', 'link_rel', 'link_notes', 'link_rss') ) ) {
			if ( $wp_error )
				return new WP_Error( 'db_insert_error', __( 'Could not insert link into the database' ), $wpdb->last_error );
			else
				return 0;
--
		$link_id = (int) $wpdb->insert_id;
	}

*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/includes/bookmark.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/options.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/options.php');
#$aq = convertSQL2pg($aq);
/*
$options = $wpdb->get_results( "SELECT * FROM $wpdb->options ORDER BY option_name" );

foreach ( (array) $options as $option ) :
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/options.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/upgrade.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/upgrade.php');
#$aq = convertSQL2pg($aq);
/*
$mysql_version  = $wpdb->db_version();
$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
	$mysql_compat = true;
else
--
<?php printf( __( '%s queries' ), $wpdb->num_queries ); ?>

<?php printf( __( '%s seconds' ), timer_stop( 0 ) ); ?>
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/upgrade.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/update-core.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/update-core.php');
#$aq = convertSQL2pg($aq);
/*
	$mysql_version  = $wpdb->db_version();
	$show_buttons = true;
	if ( 'development' == $update->response ) {
--
			if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
				$mysql_compat = true;
			else
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/update-core.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/install-helper.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/install-helper.php');
#$aq = convertSQL2pg($aq);
/*
 * if (check_column($wpdb->comments, 'comment_author', 'tinytext'))
 *     echo "ok\n";
 *
--
 * $tablename = $wpdb->links;
 * // check the column
 * if (!check_column($wpdb->links, 'link_description', 'varchar(255)')) {
 *     $ddl = "ALTER TABLE $wpdb->links MODIFY COLUMN link_description varchar(255) NOT NULL DEFAULT '' ";
 *     $q = $wpdb->query($ddl);
 * }
 *
 * if (check_column($wpdb->links, 'link_description', 'varchar(255)')) {
 *     $res .= $tablename . ' - ok <br />';
 * } else {
--
	foreach ($wpdb->get_col("SHOW TABLES",0) as $table ) {
		if ($table == $table_name) {
			return true;
--
	$wpdb->query($create_ddl);
	// we cannot directly tell that whether this succeeded!
	foreach ($wpdb->get_col("SHOW TABLES",0) as $table ) {
		if ($table == $table_name) {
			return true;
--
	foreach ($wpdb->get_col("DESC $table_name",0) as $column ) {

		if ($column == $column_name) {
--
	$wpdb->query($create_ddl);
	// we cannot directly tell that whether this succeeded!
	foreach ($wpdb->get_col("DESC $table_name",0) as $column ) {
		if ($column == $column_name) {
			return true;
--
	foreach ($wpdb->get_col("DESC $table_name",0) as $column ) {
		if ($column == $column_name) {
			//found it try to drop it.
			$wpdb->query($drop_ddl);
			// we cannot directly tell that whether this succeeded!
			foreach ($wpdb->get_col("DESC $table_name",0) as $column ) {
				if ($column == $column_name) {
					return false;
--
	$results = $wpdb->get_results("DESC $table_name");

	foreach ($results as $row ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/install-helper.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/edit.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/edit.php');
#$aq = convertSQL2pg($aq);
/*
			$post_ids = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_type=%s AND post_status = %s", $post_type, $post_status ) );
		$doaction = 'delete';
	} elseif ( isset( $_REQUEST['media'] ) ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/edit.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/setup-config.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/setup-config.php');
#$aq = convertSQL2pg($aq);
/*
	if ( ! empty( $wpdb->error ) )
		wp_die( $wpdb->error->get_error_message() . $tryagain_link );

	// Fetch or generate keys and salts.
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/setup-config.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/maint/repair.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/maint/repair.php');
#$aq = convertSQL2pg($aq);
/*
	$tables = $wpdb->tables();

	// Sitecategories may not exist if global terms are disabled.
	if ( is_multisite() && ! $wpdb->get_var( "SHOW TABLES ILIKE '$wpdb->sitecategories'" ) )
		unset( $tables['sitecategories'] );

--
		$check = $wpdb->get_row( "CHECK TABLE $table" );

		echo '<p>';
--
			$repair = $wpdb->get_row( "REPAIR TABLE $table" );

			echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;';
--
			$check = $wpdb->get_row( "ANALYZE TABLE $table" );

			echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;';
--
				$check = $wpdb->get_row( "OPTIMIZE TABLE $table" );

				echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;';
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/maint/repair.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/user-edit.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/user-edit.php');
#$aq = convertSQL2pg($aq);
/*
		if ( $wpdb->get_var( $wpdb->prepare( "SELECT user_login FROM {$wpdb->signups} WHERE user_login = %s", $current_user->user_login ) ) )
			$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->signups} SET user_email = %s WHERE user_login = %s", $user->user_email, $current_user->user_login ) );
		wp_update_user( $user );
		delete_option( $current_user->ID . '_new_email' );
--
	if ( $user->user_login && isset( $_POST[ 'email' ] ) && is_email( $_POST[ 'email' ] ) && $wpdb->get_var( $wpdb->prepare( "SELECT user_login FROM {$wpdb->signups} WHERE user_login = %s", $user->user_login ) ) )
		$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->signups} SET user_email = %s WHERE user_login = %s", $_POST[ 'email' ], $user_login ) );

	// We must delete the user from the current blog if WP added them after editing.
--
	$blog_prefix = $wpdb->get_blog_prefix();
	if ( $user_id != $current_user->ID ) {
		$cap = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->usermeta} WHERE user_id = '{$user_id}' AND meta_key = '{$blog_prefix}capabilities' AND meta_value = 'a:0:{}'" );
		if ( !is_network_admin() && null == $cap && $_POST[ 'role' ] == '' ) {
			$_POST[ 'role' ] = 'contributor';
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/user-edit.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/link.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/link.php');
#$aq = convertSQL2pg($aq);
/*
		//$q = $wpdb->query("update $wpdb->links SET link_category='$category' WHERE link_id IN ($all_links)");

		wp_redirect($this_file);
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/link.php',$aq);
#Arquivo /var/www/wordpress/wp-admin/ms-delete-site.php
$aq = file_get_contents('/var/www/wordpress/wp-admin/ms-delete-site.php');
#$aq = convertSQL2pg($aq);
/*
		wpmu_delete_blog( $wpdb->blogid );
		wp_die( sprintf( __( 'Thank you for using %s, your site has been deleted. Happy trails to you until we meet again.' ), $current_site->site_name ) );
	} else {
*/
file_put_contents('/var/www/wordpress/wppg/wp-admin/ms-delete-site.php',$aq);
#Arquivo /var/www/wordpress/wp-signup.php
$aq = file_get_contents('/var/www/wordpress/wp-signup.php');
#$aq = convertSQL2pg($aq);
/*
	wpmu_create_blog( $domain, $path, $blog_title, $current_user->ID, $meta, $wpdb->siteid );
	confirm_another_blog_signup($domain, $path, $blog_title, $current_user->user_login, $current_user->user_email, $meta);
	return true;
*/
file_put_contents('/var/www/wordpress/wppg/wp-signup.php',$aq);
#Arquivo /var/www/wordpress/wp-content/plugins/akismet/legacy.php
$aq = file_get_contents('/var/www/wordpress/wp-content/plugins/akismet/legacy.php');
#$aq = convertSQL2pg($aq);
/*
			$type = $wpdb->escape( $type );
		return $wpdb->get_results( "SELECT * FROM $wpdb->comments WHERE comment_approved = 'spam' AND comment_type='$type' ORDER BY comment_date DESC LIMIT $start, $end");
	}

--
	return $wpdb->get_results( "SELECT * FROM $wpdb->comments WHERE comment_approved = 'spam' ORDER BY comment_date DESC LIMIT $start, $end");
}

--
	$totals = $wpdb->get_results( "SELECT comment_type, COUNT(*) AS cc FROM $wpdb->comments WHERE comment_approved = 'spam' GROUP BY comment_type" );
	$return = array();
	foreach ( $totals as $total )
--
				$wpdb->query("UPDATE $wpdb->comments SET comment_approved = '1' WHERE comment_ID = '$comment'");
			akismet_submit_nonspam_comment($comment);
			++$i;
--
		$delete_time = $wpdb->escape( $_POST['display_time'] );
		$comment_ids = $wpdb->get_col( "SELECT comment_id FROM $wpdb->comments WHERE comment_approved = 'spam' AND '$delete_time' > comment_date_gmt" );
		if ( !empty( $comment_ids ) ) {
			do_action( 'delete_comment', $comment_ids );
			$wpdb->query( "DELETE FROM $wpdb->comments WHERE comment_id IN ( " . implode( ', ', $comment_ids ) . " )");
			wp_cache_delete( 'akismet_spam_count', 'widget' );
		}
--
	$s = $wpdb->escape($_POST['s']);
	$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments  WHERE
		(comment_author ILIKE '%$s%' OR
		comment_author_email ILIKE '%$s%' OR
--
	if ( $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '0'" ) )
		ob_start( 'akismet_recheck_button' );
}
*/
file_put_contents('/var/www/wordpress/wppg/wp-content/plugins/akismet/legacy.php',$aq);
#Arquivo /var/www/wordpress/wp-content/plugins/akismet/akismet.php
$aq = file_get_contents('/var/www/wordpress/wp-content/plugins/akismet/akismet.php');
#$aq = convertSQL2pg($aq);
/*
		return $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->comments WHERE user_id = %d AND comment_approved = 1", $user_id ) );
		
	if ( !empty($comment_author_email) )
		return $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_author_email = %s AND comment_author = %s AND comment_author_url = %s AND comment_approved = 1", $comment_author_email, $comment_author, $comment_author_url ) );
		
	return 0;
--
	$comment_ids = $wpdb->get_col("SELECT comment_id FROM $wpdb->comments WHERE DATE_SUB('$now_gmt', INTERVAL 15 DAY) > comment_date_gmt AND comment_approved = 'spam'");
	if ( empty( $comment_ids ) )
		return;
--
	$wpdb->query("DELETE FROM $wpdb->comments WHERE comment_id IN ( $comma_comment_ids )");
	$wpdb->query("DELETE FROM $wpdb->commentmeta WHERE comment_id IN ( $comma_comment_ids )");
	clean_comment_cache( $comment_ids );
	$n = mt_rand(1, 5000);
--
		$wpdb->query("OPTIMIZE TABLE $wpdb->comments");

}
--
		$comment_ids = $wpdb->get_col( "SELECT $wpdb->comments.comment_id FROM $wpdb->commentmeta INNER JOIN $wpdb->comments USING(comment_id) WHERE meta_key = 'akismet_as_submitted' AND DATE_SUB('$now_gmt', INTERVAL {$interval} DAY) > comment_date_gmt LIMIT 10000" ); 

		if ( empty( $comment_ids ) ) {
--
		$wpdb->query( "OPTIMIZE TABLE $wpdb->commentmeta" ); 
	}
	*/
--
    $c = $wpdb->get_row( "SELECT * FROM $wpdb->comments WHERE comment_ID = '$id'", ARRAY_A );
    if ( !$c )
        return;
--
	$comment_errors = $wpdb->get_col( "
		SELECT comment_id
		FROM {$wpdb->prefix}commentmeta
		WHERE meta_key = 'akismet_error'
		LIMIT 100
--
	$remaining = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->commentmeta WHERE meta_key = 'akismet_error'" );
	if ( $remaining && !wp_next_scheduled('akismet_schedule_cron_recheck') ) {
		wp_schedule_single_event( time() + 1200, 'akismet_schedule_cron_recheck' );
*/
file_put_contents('/var/www/wordpress/wppg/wp-content/plugins/akismet/akismet.php',$aq);
#Arquivo /var/www/wordpress/wp-content/plugins/akismet/admin.php
$aq = file_get_contents('/var/www/wordpress/wp-content/plugins/akismet/admin.php');
#$aq = convertSQL2pg($aq);
/*
				$waiting = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->commentmeta WHERE meta_key = 'akismet_error'" );
				$next_check = wp_next_scheduled('akismet_schedule_cron_recheck');
				if ( $waiting > 0 && $next_check > time() )
--
	$comment = $wpdb->get_row("SELECT * FROM $wpdb->comments WHERE comment_ID = '$comment_id'");
	if ( !$comment ) // it was deleted
		return;
--
	$comment = $wpdb->get_row("SELECT * FROM $wpdb->comments WHERE comment_ID = '$comment_id'");
	if ( !$comment ) // it was deleted
		return;
--
				$count = (int) $wpdb->get_var("SELECT COUNT(comment_ID) FROM $wpdb->comments WHERE comment_approved = 'spam'");
			}
			wp_cache_set( 'akismet_spam_count', $count, 'widget', 3600 );
--
		$type  = $wpdb->escape( $type );
	}

	return (int) $wpdb->get_var("SELECT COUNT(comment_ID) FROM $wpdb->comments WHERE comment_approved = 'spam' AND comment_type='$type'");
}

--
	$moderation = $wpdb->get_results( "SELECT * FROM $wpdb->comments WHERE comment_approved = '0'", ARRAY_A );
	foreach ( (array) $moderation as $c ) {
		$c['user_ip']    = $c['comment_author_IP'];
*/
file_put_contents('/var/www/wordpress/wppg/wp-content/plugins/akismet/admin.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/formatting.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/formatting.php');
#$aq = convertSQL2pg($aq);
/*
	return $wpdb->_escape( $data );
}

*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/formatting.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/user.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/user.php');
#$aq = convertSQL2pg($aq);
/*
	$count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );

	return apply_filters('get_usernumposts', $count, $userid);
--
	$result = $wpdb->get_results( "SELECT post_author, COUNT(*) FROM $wpdb->posts $where AND post_author IN ($userlist) GROUP BY post_author", ARRAY_N );
	foreach ( $result as $row ) {
		$count[ $row[0] ] = $row[1];
--
	$prefix = $wpdb->get_blog_prefix();
	if ( $user->has_prop( $prefix . $option ) ) // Blog specific
		$result = $user->get( $prefix . $option );
--
		$option_name = $wpdb->get_blog_prefix() . $option_name;

	return update_user_meta( $user_id, $option_name, $newvalue );
--
		$option_name = $wpdb->get_blog_prefix() . $option_name;
	return delete_user_meta( $user_id, $option_name );
}
--
				$this->query_fields[] = "$wpdb->users.$field";
			}
			$this->query_fields = implode( ',', $this->query_fields );
--
			$this->query_fields = "$wpdb->users.*";
		} else {
			$this->query_fields = "$wpdb->users.ID";
		}

--
		$this->query_from = "FROM $wpdb->users";
		$this->query_where = "WHERE 1=1";

--
					FROM $wpdb->posts
					$where
					GROUP BY post_author
				) p ON ({$wpdb->users}.ID = p.post_author)
				";
				$orderby = 'post_count';
--
				$orderby = "$wpdb->usermeta.meta_value";
			} else {
				$orderby = 'user_login';
--
				$this->query_limit = $wpdb->prepare("LIMIT %d, %d", $qv['offset'], $qv['number']);
			else
				$this->query_limit = $wpdb->prepare("LIMIT %d", $qv['number']);
		}

--
			$qv['meta_key'] = $wpdb->get_blog_prefix( $blog_id ) . 'user_level';
			$qv['meta_value'] = 0;
			$qv['meta_compare'] = '!=';
--
			$cap_meta_query['key'] = $wpdb->get_blog_prefix( $blog_id ) . 'capabilities';

			if ( $role ) {
--
			$clauses = $meta_query->get_sql( 'user', $wpdb->users, 'ID', $this );
			$this->query_from .= $clauses['join'];
			$this->query_where .= $clauses['where'];
--
			$this->query_where .= " AND $wpdb->users.ID IN ($ids)";
		} elseif ( ! empty( $qv['exclude'] ) ) {
			$ids = implode( ',', wp_parse_id_list( $qv['exclude'] ) );
			$this->query_where .= " AND $wpdb->users.ID NOT IN ($ids)";
		}

--
			$this->results = $wpdb->get_results("SELECT $this->query_fields $this->query_from $this->query_where $this->query_orderby $this->query_limit");
		} else {
			$this->results = $wpdb->get_col("SELECT $this->query_fields $this->query_from $this->query_where $this->query_orderby $this->query_limit");
		}

--
			$this->total_users = $wpdb->get_var( apply_filters( 'found_users_query', 'SELECT FOUND_ROWS()' ) );

		if ( !$this->results )
--
	if ( isset( $keys[ $wpdb->base_prefix . 'capabilities' ] ) && defined( 'MULTISITE' ) ) {
		$blog = get_blog_details( 1 );
		if ( $blog && isset( $blog->domain ) && ( $all || ( ! $blog->archived && ! $blog->spam && ! $blog->deleted ) ) ) {
--
		unset( $keys[ $wpdb->base_prefix . 'capabilities' ] );
	}

--
		if ( $wpdb->base_prefix && 0 !== strpos( $key, $wpdb->base_prefix ) )
			continue;
		$blog_id = str_replace( array( $wpdb->base_prefix, '_capabilities' ), '', $key );
		if ( ! is_numeric( $blog_id ) )
			continue;
--
	$blog_prefix = $wpdb->get_blog_prefix($id);
	$result = array();

--
		$row = $wpdb->get_row( "SELECT $select_count, COUNT(*) FROM $wpdb->usermeta WHERE meta_key = '{$blog_prefix}capabilities'", ARRAY_N );

		// Run the previous loop again to associate results with role names.
--
		$users_of_blog = $wpdb->get_col( "SELECT meta_value FROM $wpdb->usermeta WHERE meta_key = '{$blog_prefix}capabilities'" );

		foreach ( $users_of_blog as $caps_meta ) {
--
	$user_nicename_check = $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->users WHERE user_nicename = %s AND user_login != %s LIMIT 1" , $user_nicename, $user_login));

	if ( $user_nicename_check ) {
--
			$user_nicename_check = $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->users WHERE user_nicename = %s AND user_login != %s LIMIT 1" , $alt_user_nicename, $user_login));
			$suffix++;
		}
--
		$wpdb->update( $wpdb->users, $data, compact( 'ID' ) );
		$user_id = (int) $ID;
	} else {
		$wpdb->insert( $wpdb->users, $data + compact( 'user_login' ) );
		$user_id = (int) $wpdb->insert_id;
	}

--
	$row = $wpdb->get_row( $wpdb->prepare( "SELECT ID, user_activation_key FROM $wpdb->users WHERE user_login = %s", $login ) );
	if ( ! $row )
		return new WP_Error('invalid_key', __('Invalid key'));
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/user.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/class-wp-xmlrpc-server.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/class-wp-xmlrpc-server.php');
#$aq = convertSQL2pg($aq);
/*
		$page_list = $wpdb->get_results("
			SELECT ID page_id,
				post_title page_title,
--
			FROM {$wpdb->posts}
			WHERE post_type = 'page'
			ORDER BY ID
--
		$attachments = $wpdb->get_results( "SELECT ID, guid FROM {$wpdb->posts} WHERE post_parent = '0' AND post_type = 'attachment'" );
		if ( is_array( $attachments ) ) {
			foreach ( $attachments as $file ) {
--
					$wpdb->update($wpdb->posts, array('post_parent' => $post_ID), array('ID' => $file->ID) );
			}
		}
--
			$old_file = $wpdb->get_row("
				SELECT ID
				FROM {$wpdb->posts}
				WHERE post_title = '{$name}'
					AND post_type = 'attachment'
--
		$comments = $wpdb->get_results( $wpdb->prepare("SELECT comment_author_url, comment_content, comment_author_IP, comment_type FROM $wpdb->comments WHERE comment_post_ID = %d", $post_ID) );

		if ( !$comments )
--
				$sql = $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE post_title RLIKE %s", like_escape( $title ) );
				if (! ($post_ID = $wpdb->get_var($sql)) ) {
					// returning unknown error '0' is better than die()ing
			  		return $this->pingback_error( 0, '' );
--
		if ( $wpdb->get_results( $wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_author_url = %s", $post_ID, $pagelinkedfrom) ) )
			return $this->pingback_error( 48, __( 'The pingback has already been registered.' ) );

--
		$comments = $wpdb->get_results( $wpdb->prepare("SELECT comment_author_url, comment_content, comment_author_IP, comment_type FROM $wpdb->comments WHERE comment_post_ID = %d", $post_ID) );

		if ( !$comments )
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/class-wp-xmlrpc-server.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/post.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/post.php');
#$aq = convertSQL2pg($aq);
/*
			$_post = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE ID = %d LIMIT 1", $post_id ) );

			if ( ! $_post )
--
	$return = $wpdb->update( $wpdb->posts, array('post_type' => $post_type), array('ID' => $post_id) );

	clean_post_cache( $post_id );
--
	$query = "SELECT post_status, COUNT( * ) AS num_posts FROM {$wpdb->posts} WHERE post_type = %s";
	if ( 'readable' == $perm && is_user_logged_in() ) {
		$post_type_object = get_post_type_object($type);
--
		$results = (array) $wpdb->get_results( $wpdb->prepare( $query, $type ), ARRAY_A );
		$counts = array_fill_keys( get_post_stati(), 0 );

--
	$count = $wpdb->get_results( "SELECT post_mime_type, COUNT( * ) AS num_posts FROM $wpdb->posts WHERE post_type = 'attachment' AND post_status != 'trash' $and GROUP BY post_mime_type", ARRAY_A );

	$counts = array();
--
	$counts['trash'] = $wpdb->get_var( "SELECT COUNT( * ) FROM $wpdb->posts WHERE post_type = 'attachment' AND post_status = 'trash' $and");

	/**
--
	if ( !$post = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->posts WHERE ID = %d", $postid)) )
		return $post;

--
		$children_query = $wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE post_parent = %d AND post_type = %s", $postid, $post->post_type );
		$children = $wpdb->get_results( $children_query );

		$wpdb->update( $wpdb->posts, $parent_data, $parent_where + array( 'post_type' => $post->post_type ) );
	}

--
	$revision_ids = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_parent = %d AND post_type = 'revision'", $postid ) );
	// Use wp_delete_post (via wp_delete_post_revision) again. Ensures any meta/misplaced data gets cleaned up.
	foreach ( $revision_ids as $revision_id )
--
	$wpdb->update( $wpdb->posts, $parent_data, $parent_where + array( 'post_type' => 'attachment' ) );

	$comment_ids = $wpdb->get_col( $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_post_ID = %d", $postid ));
	foreach ( $comment_ids as $comment_id )
		wp_delete_comment( $comment_id, true );
--
	$post_meta_ids = $wpdb->get_col( $wpdb->prepare( "SELECT meta_id FROM $wpdb->postmeta WHERE post_id = %d ", $postid ));
	foreach ( $post_meta_ids as $mid )
		delete_metadata_by_mid( 'post', $mid );
--
	$result = $wpdb->delete( $wpdb->posts, array( 'ID' => $postid ) );
	if ( ! $result ) {
		return false;
--
	$comments = $wpdb->get_results( $wpdb->prepare("SELECT comment_ID, comment_approved FROM $wpdb->comments WHERE comment_post_ID = %d", $post_id) );
	if ( empty($comments) )
		return;
--
	$result = $wpdb->update($wpdb->comments, array('comment_approved' => 'post-trashed'), array('comment_post_ID' => $post_id));

	clean_comment_cache( array_keys($statuses) );
--
		$wpdb->query( "UPDATE $wpdb->comments SET comment_approved = '$status' WHERE comment_ID IN ('" . $comments_in . "')" );
	}

--
		if ( false === $wpdb->update( $wpdb->posts, $data, $where ) ) {
			if ( $wp_error )
				return new WP_Error('db_update_error', __('Could not update post in the database'), $wpdb->last_error);
			else
				return 0;
--
			if ( ! $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE ID = %d", $import_id) ) ) {
				$data['ID'] = $import_id;
			}
--
		if ( false === $wpdb->insert( $wpdb->posts, $data ) ) {
			if ( $wp_error )
				return new WP_Error('db_insert_error', __('Could not insert post into the database'), $wpdb->last_error);
			else
				return 0;
--
		$post_ID = (int) $wpdb->insert_id;

		// use the newly generated $post_ID
--
		$wpdb->update( $wpdb->posts, array( 'post_name' => $data['post_name'] ), $where );
	}

--
		$wpdb->update( $wpdb->posts, array( 'guid' => get_permalink( $post_ID ) ), $where );

	clean_post_cache( $post_ID );
--
	$wpdb->update( $wpdb->posts, array( 'post_status' => 'publish' ), array( 'ID' => $post->ID ) );

	clean_post_cache( $post->ID );
--
		$check_sql = "SELECT post_name FROM $wpdb->posts WHERE post_name = %s AND ID != %d LIMIT 1";
		$post_name_check = $wpdb->get_var( $wpdb->prepare( $check_sql, $slug, $post_ID ) );

		if ( $post_name_check || in_array( $slug, $feeds ) || apply_filters( 'wp_unique_post_slug_is_bad_attachment_slug', false, $slug ) ) {
--
				$post_name_check = $wpdb->get_var( $wpdb->prepare( $check_sql, $alt_post_name, $post_ID ) );
				$suffix++;
			} while ( $post_name_check );
--
		$check_sql = "SELECT post_name FROM $wpdb->posts WHERE post_name = %s AND post_type IN ( '" . implode( "', '", esc_sql( $hierarchical_post_types ) ) . "' ) AND ID != %d AND post_parent = %d LIMIT 1";
		$post_name_check = $wpdb->get_var( $wpdb->prepare( $check_sql, $slug, $post_ID, $post_parent ) );

		if ( $post_name_check || in_array( $slug, $feeds ) || preg_match( "@^($wp_rewrite->pagination_base)?\d+$@", $slug )  || apply_filters( 'wp_unique_post_slug_is_bad_hierarchical_slug', false, $slug, $post_type, $post_parent ) ) {
--
				$post_name_check = $wpdb->get_var( $wpdb->prepare( $check_sql, $alt_post_name, $post_ID, $post_parent ) );
				$suffix++;
			} while ( $post_name_check );
--
		$check_sql = "SELECT post_name FROM $wpdb->posts WHERE post_name = %s AND post_type = %s AND ID != %d LIMIT 1";
		$post_name_check = $wpdb->get_var( $wpdb->prepare( $check_sql, $slug, $post_type, $post_ID ) );

		if ( $post_name_check || in_array( $slug, $feeds ) || apply_filters( 'wp_unique_post_slug_is_bad_flat_slug', false, $slug, $post_type ) ) {
--
				$post_name_check = $wpdb->get_var( $wpdb->prepare( $check_sql, $alt_post_name, $post_type, $post_ID ) );
				$suffix++;
			} while ( $post_name_check );
--
	$pung = $wpdb->get_var( $wpdb->prepare( "SELECT pinged FROM $wpdb->posts WHERE ID = %d", $post_id ));
	$pung = trim($pung);
	$pung = preg_split('/\s/', $pung);
--
	return $wpdb->update( $wpdb->posts, array( 'pinged' => $new ), array( 'ID' => $post_id ) );
}

--
	$pung = $wpdb->get_var( $wpdb->prepare( "SELECT pinged FROM $wpdb->posts WHERE ID = %d", $post_id ));
	$pung = trim($pung);
	$pung = preg_split('/\s/', $pung);
--
	$to_ping = $wpdb->get_var( $wpdb->prepare( "SELECT to_ping FROM $wpdb->posts WHERE ID = %d", $post_id ));
	$to_ping = sanitize_trackback_urls( $to_ping );
	$to_ping = preg_split('/\s/', $to_ping, -1, PREG_SPLIT_NO_EMPTY);
--
		$page_ids = $wpdb->get_col("SELECT ID FROM $wpdb->posts WHERE post_type = 'page'");
		wp_cache_add('all_page_ids', $page_ids, 'posts');
	}
--
	$pages = $wpdb->get_results( "SELECT ID, post_name, post_parent, post_type FROM $wpdb->posts WHERE post_name IN ($in_string) AND (post_type = '$post_type_sql' OR post_type = 'attachment')", OBJECT_K );

	$revparts = array_reverse( $parts );
--
	$page = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type= %s", $page_title, $post_type ) );
	if ( $page )
		return get_post( $page, $output );
--
					$author_query = $wpdb->prepare(' post_author = %d ', $post_author);
				else
					$author_query .= $wpdb->prepare(' OR post_author = %d ', $post_author);
			}
			if ( '' != $author_query )
--
		$join = " LEFT JOIN $wpdb->postmeta ON ( $wpdb->posts.ID = $wpdb->postmeta.post_id )";

		// meta_key and meta_value might be slashed
--
			$where .= $wpdb->prepare(" AND $wpdb->postmeta.meta_key = %s", $meta_key);
		if ( '' !== $meta_value )
			$where .= $wpdb->prepare(" AND $wpdb->postmeta.meta_value = %s", $meta_value);

	}
--
		$where .= $wpdb->prepare(' AND post_parent = %d ', $parent);
	}

--
		$where_post_type = $wpdb->prepare( "post_type = %s AND post_status = %s", $post_type, array_shift( $post_status ) );
	} else {
		$post_status = implode( "', '", $post_status );
		$where_post_type = $wpdb->prepare( "post_type = %s AND post_status IN ('$post_status')", $post_type );
	}

--
				$orderby = "$wpdb->posts.ID";
				break;
			case 'rand':
--
				$orderby = "$wpdb->posts.comment_count";
				break;
			default:
--
					$orderby = "$wpdb->posts." . $orderby;
				else
					$orderby = "$wpdb->posts.post_" . $orderby;
		}

--
	$sort_column = ! empty( $orderby_array ) ? implode( ',', $orderby_array ) : "$wpdb->posts.post_title";

	$sort_order = strtoupper( $sort_order );
--
	$query = "SELECT * FROM $wpdb->posts $join WHERE ($where_post_type) $where ";
	$query .= $author_query;
	$query .= " ORDER BY " . $sort_column . " " . $sort_order ;
--
	$pages = $wpdb->get_results($query);

	if ( empty($pages) ) {
--
		$wpdb->update( $wpdb->posts, $data, array( 'ID' => $post_ID ) );
	} else {
		// If there is a suggested ID, use it if not already present
--
			if ( ! $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE ID = %d", $import_id) ) ) {
				$data['ID'] = $import_id;
			}
--
		$wpdb->insert( $wpdb->posts, $data );
		$post_ID = (int) $wpdb->insert_id;
	}

--
		$wpdb->update( $wpdb->posts, compact("post_name"), array( 'ID' => $post_ID ) );
	}

--
	if ( !$post = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->posts WHERE ID = %d", $post_id) ) )
		return $post;

--
	$comment_ids = $wpdb->get_col( $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_post_ID = %d", $post_id ));
	foreach ( $comment_ids as $comment_id )
		wp_delete_comment( $comment_id, true );
--
	$post_meta_ids = $wpdb->get_col( $wpdb->prepare( "SELECT meta_id FROM $wpdb->postmeta WHERE post_id = %d ", $post_id ));
	foreach ( $post_meta_ids as $mid )
		delete_metadata_by_mid( 'post', $mid );
--
	$result = $wpdb->delete( $wpdb->posts, array( 'ID' => $post_id ) );
	if ( ! $result ) {
		return false;
--
		if (! $wpdb->get_row( $wpdb->prepare( "SELECT meta_id FROM $wpdb->postmeta WHERE meta_key = '_wp_attachment_metadata' AND meta_value ILIKE %s AND post_id <> %d", '%' . $meta['thumb'] . '%', $post_id)) ) {
			$thumbfile = str_replace(basename($file), $meta['thumb'], $file);
			/** This filter is documented in wp-admin/custom-header.php */
--
			$sql = $wpdb->prepare( 'WHERE post_type = %s AND ', $post_type );
		} else {
			$sql = $wpdb->prepare( 'WHERE post_author = %d AND post_type = %s AND ', $post_author, $post_type );
		}
	} else {
--
				$date = $wpdb->get_var("SELECT post_{$field}_gmt FROM $wpdb->posts WHERE post_status = 'publish' AND post_type IN ({$post_types}) ORDER BY post_{$field}_gmt DESC LIMIT 1");
				break;
			case 'blog':
				$date = $wpdb->get_var("SELECT post_{$field} FROM $wpdb->posts WHERE post_status = 'publish' AND post_type IN ({$post_types}) ORDER BY post_{$field}_gmt DESC LIMIT 1");
				break;
			case 'server':
				$date = $wpdb->get_var("SELECT DATE_ADD(post_{$field}_gmt, INTERVAL '$add_seconds_server' SECOND) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type IN ({$post_types}) ORDER BY post_{$field}_gmt DESC LIMIT 1");
				break;
		}
--
			$wpdb->update( $wpdb->posts, array( 'guid' => get_permalink( $post->ID ) ), array( 'ID' => $post->ID ) );
		do_action('private_to_published', $post->ID);  // Deprecated, use private_to_publish
	}
--
	$old_posts = $wpdb->get_col( "SELECT ID FROM $wpdb->posts WHERE post_status = 'auto-draft' AND DATE_SUB( NOW(), INTERVAL 7 DAY ) > post_date" );
	foreach ( (array) $old_posts as $delete )
		wp_delete_post( $delete, true ); // Force delete
--
		$fresh_posts = $wpdb->get_results( sprintf( "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE ID IN (%s)", join( ",", $non_cached_ids ) ) );

		update_post_caches( $fresh_posts, 'any', $update_term_cache, $update_meta_cache );
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/post.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/load.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/load.php');
#$aq = convertSQL2pg($aq);
/*
	if ( !empty( $wpdb->error ) )
		dead_db();

	$wpdb->field_types = array( 'post_author' => '%d', 'post_parent' => '%d', 'menu_order' => '%d', 'term_id' => '%d', 'term_group' => '%d', 'term_taxonomy_id' => '%d',
		'parent' => '%d', 'count' => '%d','object_id' => '%d', 'term_order' => '%d', 'ID' => '%d', 'comment_ID' => '%d', 'comment_post_ID' => '%d', 'comment_parent' => '%d',
		'user_id' => '%d', 'link_id' => '%d', 'link_owner' => '%d', 'link_rating' => '%d', 'option_id' => '%d', 'blog_id' => '%d', 'meta_id' => '%d', 'post_id' => '%d',
--
	$prefix = $wpdb->set_prefix(DB_SCHEMA, $table_prefix );

	if ( is_wp_error( $prefix ) ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/load.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/ms-deprecated.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/ms-deprecated.php');
#$aq = convertSQL2pg($aq);
/*
	$blogs = $wpdb->get_results( $wpdb->prepare("SELECT blog_id, domain, path FROM $wpdb->blogs WHERE site_id = %d AND public = '1' AND archived = '0' AND mature = '0' AND spam = '0' AND deleted = '0' ORDER BY registered DESC", $wpdb->siteid), ARRAY_A );

	foreach ( (array) $blogs as $details ) {
--
		$blog_list[ $details['blog_id'] ]['postcount'] = $wpdb->get_var( "SELECT COUNT(ID) FROM " . $wpdb->get_blog_prefix( $details['blog_id'] ). "posts WHERE post_status='publish' AND post_type='post'" );
	}
	unset( $blogs );
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/ms-deprecated.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/capabilities.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/capabilities.php');
#$aq = convertSQL2pg($aq);
/*
		$this->role_key = $wpdb->get_blog_prefix() . 'user_roles';
		if ( ! empty( $wp_user_roles ) ) {
			$this->roles = $wp_user_roles;
--
		$this->role_key = $wpdb->get_blog_prefix() . 'user_roles';
		$this->roles = get_option( $this->role_key );
		if ( empty( $this->roles ) )
--
		if ( !$user = $wpdb->get_row( $wpdb->prepare(
			"SELECT * FROM $wpdb->users WHERE $db_field = %s", $value
		) ) )
			return false;
--
			$this->cap_key = $wpdb->get_blog_prefix() . 'capabilities';
		else
			$this->cap_key = $cap_key;
--
		update_user_meta( $this->ID, $wpdb->get_blog_prefix() . 'user_level', $this->user_level );
	}

--
		delete_user_meta( $this->ID, $wpdb->get_blog_prefix() . 'user_level' );
		$this->get_role_caps();
	}
--
			$cap_key = $wpdb->get_blog_prefix( $blog_id ) . 'capabilities';
		else
			$cap_key = '';
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/capabilities.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/query.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/query.php');
#$aq = convertSQL2pg($aq);
/*
				$q['search_orderby_title'][] = "$wpdb->posts.post_title ILIKE '%$term%'";

			$search .= "{$searchand}(($wpdb->posts.post_title ILIKE '{$n}{$term}{$n}') OR ($wpdb->posts.post_content ILIKE '{$n}{$term}{$n}'))";
			$searchand = ' AND ';
		}
--
				$search .= " AND ($wpdb->posts.post_password = '') ";
		}

--
			$search_orderby .= "WHEN $wpdb->posts.post_title ILIKE '%{$search_orderby_s}%' THEN 1 ";

			// sanity limit, sort as sentence when more than 6 terms
--
			$search_orderby .= "WHEN $wpdb->posts.post_content ILIKE '%{$search_orderby_s}%' THEN 4 ";
			$search_orderby .= 'ELSE 5 END)';
		} else {
--
				$fields = "$wpdb->posts.ID";
				break;
			case 'id=>parent':
				$fields = "$wpdb->posts.ID, $wpdb->posts.post_parent";
				break;
			default:
				$fields = "$wpdb->posts.*";
		}

--
			$where .= " AND $wpdb->posts.menu_order = " . $q['menu_order'];

		// The "m" parameter is meant for months but accepts datetimes of varying specificity
--
			$where .= " AND YEAR($wpdb->posts.post_date)=" . substr($q['m'], 0, 4);
			if ( strlen($q['m']) > 5 )
				$where .= " AND MONTH($wpdb->posts.post_date)=" . substr($q['m'], 4, 2);
			if ( strlen($q['m']) > 7 )
				$where .= " AND DAYOFMONTH($wpdb->posts.post_date)=" . substr($q['m'], 6, 2);
			if ( strlen($q['m']) > 9 )
				$where .= " AND HOUR($wpdb->posts.post_date)=" . substr($q['m'], 8, 2);
			if ( strlen($q['m']) > 11 )
				$where .= " AND MINUTE($wpdb->posts.post_date)=" . substr($q['m'], 10, 2);
			if ( strlen($q['m']) > 13 )
				$where .= " AND SECOND($wpdb->posts.post_date)=" . substr($q['m'], 12, 2);
		}

--
			$where .= " AND $wpdb->posts.post_name = '" . $q['name'] . "'";
		} elseif ( '' != $q['pagename'] ) {
			if ( isset($this->queried_object_id) ) {
--
				$where .= " AND ($wpdb->posts.ID = '$reqpage')";
				$reqpage_obj = get_post( $reqpage );
				if ( is_object($reqpage_obj) && 'attachment' == $reqpage_obj->post_type ) {
--
			$where .= " AND $wpdb->posts.post_name = '" . $q['attachment'] . "'";
		}

--
			$where .= " AND {$wpdb->posts}.ID = " . $q['p'];
		} elseif ( $q['post__in'] ) {
			$post__in = implode(',', array_map( 'absint', $q['post__in'] ));
			$where .= " AND {$wpdb->posts}.ID IN ($post__in)";
		} elseif ( $q['post__not_in'] ) {
			$post__not_in = implode(',',  array_map( 'absint', $q['post__not_in'] ));
			$where .= " AND {$wpdb->posts}.ID NOT IN ($post__not_in)";
		}

--
			$where .= $wpdb->prepare( " AND $wpdb->posts.post_parent = %d ", $q['post_parent'] );
		} elseif ( $q['post_parent__in'] ) {
			$post_parent__in = implode( ',', array_map( 'absint', $q['post_parent__in'] ) );
			$where .= " AND {$wpdb->posts}.post_parent IN ($post_parent__in)";
		} elseif ( $q['post_parent__not_in'] ) {
			$post_parent__not_in = implode( ',',  array_map( 'absint', $q['post_parent__not_in'] ) );
			$where .= " AND {$wpdb->posts}.post_parent NOT IN ($post_parent__not_in)";
		}

--
				$where = " AND {$wpdb->posts}.ID = " . $q['page_id'];
			}
		}
--
			$clauses = $this->tax_query->get_sql( $wpdb->posts, 'ID' );

			$join .= $clauses['join'];
--
			$groupby = "{$wpdb->posts}.ID";
		}

--
			$where .= " AND {$wpdb->posts}.post_author NOT IN ($author__not_in) ";
		} elseif ( ! empty( $q['author__in'] ) ) {
			$author__in = implode( ',', array_map( 'absint', array_unique( (array) $q['author__in'] ) ) );
			$where .= " AND {$wpdb->posts}.post_author IN ($author__in) ";
		}

--
			$whichauthor .= " AND ($wpdb->posts.post_author = " . absint($q['author']) . ')';
		}

--
			$whichmimetype = wp_post_mime_type_where( $q['post_mime_type'], $wpdb->posts );

		$where .= $search . $whichauthor . $whichmimetype;
--
			$orderby = "$wpdb->posts.post_date " . $q['order'];
		} elseif ( 'none' == $q['orderby'] ) {
			$orderby = '';
--
			$orderby = "FIELD( {$wpdb->posts}.ID, $post__in )";
		} elseif ( $q['orderby'] == 'post_parent__in' && ! empty( $post_parent__in ) ) {
			$orderby = "FIELD( {$wpdb->posts}.post_parent, $post_parent__in )";
		} else {
			// Used to filter values
--
						$orderby = "$wpdb->posts.menu_order";
						break;
					case 'ID':
						$orderby = "$wpdb->posts.ID";
						break;
					case 'rand':
--
							$orderby = "CAST($wpdb->postmeta.meta_value AS {$meta_type})";
						} else {
							$orderby = "$wpdb->postmeta.meta_value";
						}
						break;
--
						$orderby = "$wpdb->postmeta.meta_value+0";
						break;
					case 'comment_count':
						$orderby = "$wpdb->posts.comment_count";
						break;
					default:
						$orderby = "$wpdb->posts.post_" . $orderby;
				}

--
				$orderby = "$wpdb->posts.post_date ".$q['order'];
			else
				$orderby .= " {$q['order']}";
--
				$where .= " AND $wpdb->posts.post_type IN ('" . join("', '", $in_search_post_types ) . "')";
		} elseif ( !empty( $post_type ) && is_array( $post_type ) ) {
			$where .= " AND $wpdb->posts.post_type IN ('" . join("', '", $post_type) . "')";
		} elseif ( ! empty( $post_type ) ) {
			$where .= " AND $wpdb->posts.post_type = '$post_type'";
			$post_type_object = get_post_type_object ( $post_type );
		} elseif ( $this->is_attachment ) {
			$where .= " AND $wpdb->posts.post_type = 'attachment'";
			$post_type_object = get_post_type_object ( 'attachment' );
		} elseif ( $this->is_page ) {
			$where .= " AND $wpdb->posts.post_type = 'page'";
			$post_type_object = get_post_type_object ( 'page' );
		} else {
			$where .= " AND $wpdb->posts.post_type = 'post'";
			$post_type_object = get_post_type_object ( 'post' );
		}
--
					$e_status[] = "$wpdb->posts.post_status <> '$status'";
			} else {
				foreach ( get_post_stati() as $status ) {
--
							$p_status[] = "$wpdb->posts.post_status = '$status'";
						else
							$r_status[] = "$wpdb->posts.post_status = '$status'";
					}
				}
--
					$statuswheres[] = "($wpdb->posts.post_author = $user_id " . "AND (" . join( ' OR ', $r_status ) . "))";
				else
					$statuswheres[] = "(" . join( ' OR ', $r_status ) . ")";
--
					$statuswheres[] = "($wpdb->posts.post_author = $user_id " . "AND (" . join( ' OR ', $p_status ) . "))";
				else
					$statuswheres[] = "(" . join( ' OR ', $p_status ) . ")";
--
				$join .= " LEFT JOIN $wpdb->posts AS p2 ON ($wpdb->posts.post_parent = p2.ID) ";
				foreach ( $statuswheres as $index => $statuswhere )
					$statuswheres[$index] = "($statuswhere OR ($wpdb->posts.post_status = 'inherit' AND " . str_replace($wpdb->posts, 'p2', $statuswhere) . "))";
			}
			foreach ( $statuswheres as $statuswhere )
--
			$where .= " AND ($wpdb->posts.post_status = 'publish'";

			// Add public states.
--
				$where .= " OR $wpdb->posts.post_status = '$state'";
			}

--
					$where .= " OR $wpdb->posts.post_status = '$state'";
			}

--
					$where .= current_user_can( $read_private_cap ) ? " OR $wpdb->posts.post_status = '$state'" : " OR $wpdb->posts.post_author = $user_id AND $wpdb->posts.post_status = '$state'";
			}

--
			$clauses = $this->meta_query->get_sql( 'post', $wpdb->posts, 'ID', $this );
			$join .= $clauses['join'];
			$where .= $clauses['where'];
--
				$cjoin = "JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) $join ";
				$cwhere = "WHERE comment_approved = '1' $where";
				$cgroupby = "$wpdb->comments.comment_id";
			} else { // Other non singular e.g. front
				$cjoin = "JOIN $wpdb->posts ON ( $wpdb->comments.comment_post_ID = $wpdb->posts.ID )";
				$cwhere = "WHERE post_status = 'publish' AND comment_approved = '1'";
				$cgroupby = '';
--
			$this->comments = (array) $wpdb->get_results("SELECT $distinct $wpdb->comments.* FROM $wpdb->comments $cjoin $cwhere $cgroupby $corderby $climits");
			$this->comment_count = count($this->comments);

--
				$where = "AND $wpdb->posts.ID IN ($post_ids) ";
			else
				$where = "AND 0";
--
		$this->request = $old_request = "SELECT $found_rows $distinct $fields FROM $wpdb->posts $join WHERE 1=1 $where $groupby $orderby $limits";

		if ( !$q['suppress_filters'] ) {
--
			$this->posts = $wpdb->get_col( $this->request );
			$this->post_count = count( $this->posts );
			$this->set_found_posts( $q, $limits );
--
			$this->posts = $wpdb->get_results( $this->request );
			$this->post_count = count( $this->posts );
			$this->set_found_posts( $q, $limits );
--
		$split_the_query = ( $old_request == $this->request && "$wpdb->posts.*" == $fields && !empty( $limits ) && $q['posts_per_page'] < 500 );
		$split_the_query = apply_filters( 'split_the_query', $split_the_query, $this );

--
			$this->request = "SELECT $found_rows $distinct $wpdb->posts.ID FROM $wpdb->posts $join WHERE 1=1 $where $groupby $orderby $limits";

			$this->request = apply_filters( 'posts_request_ids', $this->request, $this );
--
			$ids = $wpdb->get_col( $this->request );

			if ( $ids ) {
--
			$this->posts = $wpdb->get_results( $this->request );
			$this->set_found_posts( $q, $limits );
		}
--
			$comments_request = "SELECT $wpdb->comments.* FROM $wpdb->comments $cjoin $cwhere $cgroupby $corderby $climits";
			$this->comments = $wpdb->get_results($comments_request);
			$this->comment_count = count($this->comments);
		}
--
			$this->found_posts = $wpdb->get_var( apply_filters_ref_array( 'found_posts_query', array( 'SELECT FOUND_ROWS()', &$this ) ) );
		else
			$this->found_posts = count( $this->posts );
--
		$query = $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta, $wpdb->posts WHERE ID = post_id AND post_type = %s AND meta_key = '_wp_old_slug' AND meta_value = %s", $post_type, $wp_query->query_vars['name']);

		// if year, monthnum, or day have been specified, make our query more precise
--
			$query .= $wpdb->prepare(" AND YEAR(post_date) = %d", $wp_query->query_vars['year']);
		if ( '' != $wp_query->query_vars['monthnum'] )
			$query .= $wpdb->prepare(" AND MONTH(post_date) = %d", $wp_query->query_vars['monthnum']);
		if ( '' != $wp_query->query_vars['day'] )
			$query .= $wpdb->prepare(" AND DAYOFMONTH(post_date) = %d", $wp_query->query_vars['day']);

		$id = (int) $wpdb->get_var($query);

		if ( ! $id )
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/query.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/author-template.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/author-template.php');
#$aq = convertSQL2pg($aq);
/*
	foreach ( (array) $wpdb->get_results("SELECT DISTINCT post_author, COUNT(ID) AS count FROM $wpdb->posts WHERE post_type = 'post' AND " . get_private_posts_cap_sql( 'post' ) . " GROUP BY post_author") as $row )
		$author_count[$row->post_author] = $row->count;

--
		$rows = (array) $wpdb->get_col("SELECT DISTINCT post_author FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' LIMIT 2");
		$is_multi_author = 1 < count( $rows ) ? 1 : 0;
		set_transient( 'is_multi_author', $is_multi_author );
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/author-template.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/comment-template.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/comment-template.php');
#$aq = convertSQL2pg($aq);
/*
		$comments = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND (comment_approved = '1' OR ( user_id = %d AND comment_approved = '0' ) )  ORDER BY comment_date_gmt", $post->ID, $user_ID));
	} else if ( empty($comment_author) ) {
		$comments = get_comments( array('post_id' => $post->ID, 'status' => 'approve', 'order' => 'ASC') );
--
		$comments = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND ( comment_approved = '1' OR ( comment_author = %s AND comment_author_email = %s AND comment_approved = '0' ) ) ORDER BY comment_date_gmt", $post->ID, wp_specialchars_decode($comment_author,ENT_QUOTES), $comment_author_email));
	}

*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/comment-template.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/general-template.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/general-template.php');
#$aq = convertSQL2pg($aq);
/*
		$query = "SELECT YEAR(post_date) AS \"year\", MONTH(post_date) AS \"month\", count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date $order $limit";
		$key = md5( $query );
		$key = "wp_get_archives:$key:$last_changed";
--
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
--
		$query = "SELECT YEAR(post_date) AS \"year\", count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date) ORDER BY post_date $order $limit";
		$key = md5( $query );
		$key = "wp_get_archives:$key:$last_changed";
--
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
--
		$query = "SELECT YEAR(post_date) AS \"year\", MONTH(post_date) AS \"month\", DAYOFMONTH(post_date) AS \"dayofmonth\", count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date), DAYOFMONTH(post_date) ORDER BY post_date $order $limit";
		$key = md5( $query );
		$key = "wp_get_archives:$key:$last_changed";
--
			$results = $wpdb->get_results( $query );
			$cache[ $key ] = $results;
			wp_cache_set( $key, $results, 'posts' );
--
		$query = "SELECT DISTINCT $week AS \"week\", YEAR( \"post_date\" ) AS \"yr\", DATE_FORMAT( \"post_date\", '%Y-%m-%d' ) AS \"yyyymmdd\", count( \"ID\" ) AS \"posts\" FROM \"$wpdb->posts\" $join $where GROUP BY $week, YEAR( \"post_date\" ) ORDER BY \"post_date\" $order $limit";
		$key = md5( $query );
		$key = "wp_get_archives:$key:$last_changed";
--
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
--
		$query = "SELECT * FROM $wpdb->posts $join $where ORDER BY $orderby $limit";
		$key = md5( $query );
		$key = "wp_get_archives:$key:$last_changed";
--
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
--
		$gotsome = $wpdb->get_var("SELECT 1 as test FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' LIMIT 1");
		if ( !$gotsome ) {
			$cache[ $key ] = '';
--
		$thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')");
	} elseif ( !empty($m) ) {
		$thisyear = ''.intval(substr($m, 0, 4));
--
	$previous = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
		FROM $wpdb->posts
		WHERE post_date < '$thisyear-$thismonth-01'
		AND post_type = 'post' AND post_status = 'publish'
--
	$next = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
		FROM $wpdb->posts
		WHERE post_date > '$thisyear-$thismonth-{$last_day} 23:59:59'
		AND post_type = 'post' AND post_status = 'publish'
--
	$dayswithposts = $wpdb->get_results("SELECT DISTINCT DAYOFMONTH(post_date)
		FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
		AND post_type = 'post' AND post_status = 'publish'
		AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'", ARRAY_N);
--
	$ak_post_titles = $wpdb->get_results("SELECT ID, post_title, DAYOFMONTH(post_date) as dom "
		."FROM $wpdb->posts "
		."WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00' "
		."AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59' "
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/general-template.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/option.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/option.php');
#$aq = convertSQL2pg($aq);
/*
				$row = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", $option ) );

				// Has to be get_row instead of get_var because of funkiness with 0, false, null values
--
		$suppress = $wpdb->suppress_errors();
		$row = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", $option ) );
		$wpdb->suppress_errors( $suppress );
		if ( is_object( $row ) )
			$value = $row->option_value;
--
		$suppress = $wpdb->suppress_errors();
		if ( !$alloptions_db = $wpdb->get_results( "SELECT option_name, option_value FROM $wpdb->options WHERE autoload = 'yes'" ) )
			$alloptions_db = $wpdb->get_results( "SELECT option_name, option_value FROM $wpdb->options" );
		$wpdb->suppress_errors($suppress);
		$alloptions = array();
		foreach ( (array) $alloptions_db as $o ) {
--
		$site_id = $wpdb->siteid;

	$core_options = array('site_name', 'siteurl', 'active_sitewide_plugins', '_site_transient_timeout_theme_roots', '_site_transient_theme_roots', 'site_admins', 'can_compress_scripts', 'global_terms_enabled', 'ms_files_rewriting' );
--
	$options = $wpdb->get_results( $wpdb->prepare("SELECT meta_key, meta_value FROM $wpdb->sitemeta WHERE meta_key IN ($core_options_in) AND site_id = %d", $site_id) );

	foreach ( $options as $option ) {
--
	$result = $wpdb->update( $wpdb->options, array( 'option_value' => $serialized_value ), array( 'option_name' => $option ) );
	if ( ! $result )
		return false;
--
	$result = $wpdb->query( $wpdb->prepare( "INSERT INTO \"$wpdb->options\" (\"option_name\", \"option_value\", \"autoload\") VALUES (%s, %s, %s) ON DUPLICATE KEY UPDATE \"option_name\" = VALUES(\"option_name\"), \"option_value\" = VALUES(\"option_value\"), \"autoload\" = VALUES(\"autoload\")", $option, $serialized_value, $autoload ) );
	if ( ! $result )
		return false;
--
	$row = $wpdb->get_row( $wpdb->prepare( "SELECT autoload FROM $wpdb->options WHERE option_name = %s", $option ) );
	if ( is_null( $row ) )
		return false;
--
	$result = $wpdb->delete( $wpdb->options, array( 'option_name' => $option ) );
	if ( ! defined( 'WP_INSTALLING' ) ) {
		if ( 'yes' == $row->autoload ) {
--
	$notoptions_key = "{$wpdb->siteid}:notoptions";
	$notoptions = wp_cache_get( $notoptions_key, 'site-options' );
	if ( isset( $notoptions[$option] ) )
--
		$cache_key = "{$wpdb->siteid}:$option";
		if ( $use_cache )
			$value = wp_cache_get($cache_key, 'site-options');
--
			$row = $wpdb->get_row( $wpdb->prepare("SELECT meta_value FROM $wpdb->sitemeta WHERE meta_key = %s AND site_id = %d", $option, $wpdb->siteid ) );

			// Has to be get_row instead of get_var because of funkiness with 0, false, null values
--
	$notoptions_key = "{$wpdb->siteid}:notoptions";

	if ( !is_multisite() ) {
--
		$cache_key = "{$wpdb->siteid}:$option";

		// Make sure the option doesn't already exist. We can check the 'notoptions' cache before we ask for a db query
--
		$result = $wpdb->insert( $wpdb->sitemeta, array('site_id' => $wpdb->siteid, 'meta_key' => $option, 'meta_value' => $serialized_value ) );

		if ( ! $result )
--
		$row = $wpdb->get_row( $wpdb->prepare( "SELECT meta_id FROM {$wpdb->sitemeta} WHERE meta_key = %s AND site_id = %d", $option, $wpdb->siteid ) );
		if ( is_null( $row ) || !$row->meta_id )
			return false;
		$cache_key = "{$wpdb->siteid}:$option";
		wp_cache_delete( $cache_key, 'site-options' );

		$result = $wpdb->delete( $wpdb->sitemeta, array( 'meta_key' => $option, 'site_id' => $wpdb->siteid ) );
	}

--
	$notoptions_key = "{$wpdb->siteid}:notoptions";
	$notoptions = wp_cache_get( $notoptions_key, 'site-options' );
	if ( is_array( $notoptions ) && isset( $notoptions[$option] ) ) {
--
		$result = $wpdb->update( $wpdb->sitemeta, array( 'meta_value' => $serialized_value ), array( 'site_id' => $wpdb->siteid, 'meta_key' => $option ) );

		if ( $result ) {
			$cache_key = "{$wpdb->siteid}:$option";
			wp_cache_set( $cache_key, $value, 'site-options' );
		}
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/option.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/rewrite.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/rewrite.php');
#$aq = convertSQL2pg($aq);
/*
		$pages = $wpdb->get_results("SELECT ID, post_name, post_parent FROM $wpdb->posts WHERE post_type = 'page' AND post_status != 'auto-draft'");
		$posts = get_page_hierarchy( $pages );

--
			$attachments = $wpdb->get_results( $wpdb->prepare( "SELECT ID, post_name, post_parent FROM $wpdb->posts WHERE post_type = 'attachment' AND post_parent = %d", $id ));
			if ( !empty($attachments) ) {
				foreach ( $attachments as $attachment ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/rewrite.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/pluggable.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/pluggable.php');
#$aq = convertSQL2pg($aq);
/*
	$users = $wpdb->get_results( "SELECT * FROM $wpdb->users WHERE ID IN ($list)" );

	$ids = array();
--
	$comments_waiting = $wpdb->get_var("SELECT count(comment_ID) FROM $wpdb->comments WHERE comment_approved = '0'");

	// The blogname option is escaped with esc_html on the way into the database in sanitize_option
--
	$wpdb->update($wpdb->users, array('user_pass' => $hash, 'user_activation_key' => ''), array('ID' => $user_id) );

	wp_cache_delete($user_id, 'users');
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/pluggable.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/ms-default-constants.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/ms-default-constants.php');
#$aq = convertSQL2pg($aq);
/*
		define( 'UPLOADS', UPLOADBLOGSDIR . "/{$wpdb->blogid}/files/" );

		// Uploads dir relative to ABSPATH
--
			define( 'BLOGUPLOADDIR', WP_CONTENT_DIR . "/blogs.dir/{$wpdb->blogid}/files/" );
	}
}
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/ms-default-constants.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/link-template.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/link-template.php');
#$aq = convertSQL2pg($aq);
/*
		$join = " INNER JOIN $wpdb->term_relationships AS tr ON p.ID = tr.object_id INNER JOIN $wpdb->term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";

		if ( $in_same_term ) {
--
			$join .= $wpdb->prepare( " AND tt.taxonomy = %s AND tt.term_id IN (" . implode( ',', array_map( 'intval', $term_array ) ) . ")", $taxonomy );
		}

		$posts_in_ex_terms_sql = $wpdb->prepare( "AND tt.taxonomy = %s", $taxonomy );
		if ( ! empty( $excluded_terms ) ) {
			if ( ! is_array( $excluded_terms ) ) {
--
				$posts_in_ex_terms_sql = $wpdb->prepare( " AND tt.taxonomy = %s AND tt.term_id NOT IN (" . implode( $excluded_terms, ',' ) . ')', $taxonomy );
			}
		}
--
	$where = apply_filters( "get_{$adjacent}_post_where", $wpdb->prepare( "WHERE p.post_date $op %s AND p.post_type = %s AND p.post_status = 'publish' $posts_in_ex_terms_sql", $current_post_date, $post->post_type), $in_same_term, $excluded_terms );
	$sort  = apply_filters( "get_{$adjacent}_post_sort", "ORDER BY p.post_date $order LIMIT 1" );

	$query = "SELECT p.ID FROM $wpdb->posts AS p $join $where $sort";
	$query_key = 'adjacent_post_' . md5( $query );
	$result = wp_cache_get( $query_key, 'counts' );
--
	$result = $wpdb->get_var( $query );
	if ( null === $result )
		$result = '';
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/link-template.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/canonical.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/canonical.php');
#$aq = convertSQL2pg($aq);
/*
		$vars = $wpdb->get_results( $wpdb->prepare("SELECT post_type, post_parent FROM $wpdb->posts WHERE ID = %d", $id) );

		if ( isset($vars[0]) && $vars = $vars[0] ) {
--
			if ( ( false !== $author ) && $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE $wpdb->posts.post_author = %d AND $wpdb->posts.post_status = 'publish' LIMIT 1", $author->ID ) ) ) {
				if ( $redirect_url = get_author_posts_url($author->ID, $author->user_nicename) )
					$redirect['query'] = remove_query_arg('author', $redirect['query']);
--
		$where = $wpdb->prepare("post_name ILIKE %s", like_escape( get_query_var('name') ) . '%');

		// if any of post_type, year, monthnum, or day are set, use them to refine the query
--
			$where .= $wpdb->prepare(" AND post_type = %s", get_query_var('post_type'));
		else
			$where .= " AND post_type IN ('" . implode( "', '", get_post_types( array( 'public' => true ) ) ) . "')";
--
			$where .= $wpdb->prepare(" AND YEAR(post_date) = %d", get_query_var('year'));
		if ( get_query_var('monthnum') )
			$where .= $wpdb->prepare(" AND MONTH(post_date) = %d", get_query_var('monthnum'));
		if ( get_query_var('day') )
			$where .= $wpdb->prepare(" AND DAYOFMONTH(post_date) = %d", get_query_var('day'));

		$post_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE $where AND post_status = 'publish'");
		if ( ! $post_id )
			return false;
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/canonical.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/date.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/date.php');
#$aq = convertSQL2pg($aq);
/*
			$where_parts[] = $wpdb->prepare( "$column $gt %s", $this->build_mysql_datetime( $query['after'], true ) );

		if ( ! empty( $query['before'] ) )
			$where_parts[] = $wpdb->prepare( "$column $lt %s", $this->build_mysql_datetime( $query['before'], false ) );

		// Specific value queries
--
		return $wpdb->prepare( "DATE_FORMAT( $column, %s ) $compare %f", $format, $time );
	}
}
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/date.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/functions.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/functions.php');
#$aq = convertSQL2pg($aq);
/*
			$mids = $wpdb->get_col( $wpdb->prepare("SELECT meta_id FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = 'enclosure' AND meta_value ILIKE (%s)", $post_ID, like_escape( $link_test ) . '%') );
			foreach ( $mids as $mid )
				delete_metadata_by_mid( 'post', $mid );
--
		if ( $url != '' && !$wpdb->get_var( $wpdb->prepare( "SELECT post_id FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = 'enclosure' AND meta_value ILIKE (%s)", $post_ID, like_escape( $url ) . '%' ) ) ) {

			if ( $headers = wp_get_http_headers( $url) ) {
--
	return $wpdb->num_queries;
}

--
	$suppress = $wpdb->suppress_errors();
	if ( ! defined( 'WP_INSTALLING' ) ) {
		$alloptions = wp_load_alloptions();
--
		$installed = $wpdb->get_var( "SELECT option_value FROM $wpdb->options WHERE option_name = 'siteurl'" );
	else
		$installed = $alloptions['siteurl'];
	$wpdb->suppress_errors( $suppress );

	$installed = !empty( $installed );
--
	$suppress = $wpdb->suppress_errors();

	// Loop over the WP tables. If none exist, then scratch install is allowed.
--
	$wp_tables = $wpdb->tables();
	foreach ( $wp_tables as $table ) {
		// The existence of custom user tables shouldn't suggest an insane state or prevent a clean install.
--
		if ( ! $wpdb->get_results($wpdb->describe($table) ) )
			continue;

--
		$wpdb->error = sprintf( __( 'One or more database tables are unavailable. The database may need to be <a href="%s">repaired</a>.' ), 'maint/repair.php?referrer=is_blog_installed' );
		dead_db();
	}
--
	$wpdb->suppress_errors( $suppress );

	wp_cache_set( 'is_blog_installed', false );
--
		wp_die($wpdb->error);

	// Otherwise, be terse.
--
	$primary_network_id = (int) $wpdb->get_var( "SELECT id FROM $wpdb->site ORDER BY id LIMIT 1" );
	wp_cache_add( 'primary_network_id', $primary_network_id, 'site-options' );

--
	$posts_to_delete = $wpdb->get_results($wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_wp_trash_meta_time' AND meta_value < '%d'", $delete_timestamp), ARRAY_A);

	foreach ( (array) $posts_to_delete as $post ) {
--
	$comments_to_delete = $wpdb->get_results($wpdb->prepare("SELECT comment_id FROM $wpdb->commentmeta WHERE meta_key = '_wp_trash_meta_time' AND meta_value < '%d'", $delete_timestamp), ARRAY_A);

	foreach ( (array) $comments_to_delete as $comment ) {
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/functions.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/deprecated.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/deprecated.php');
#$aq = convertSQL2pg($aq);
/*
 * $wpdb->linkcategories and output it as a nested HTML unordered list.
 *
 * @since 1.0.1
--
	$cur = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = %s", $user_id, $meta_key) );

	if ( $cur && $cur->umeta_id )
--
		$wpdb->query( $wpdb->prepare("DELETE FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = %s AND meta_value = %s", $user_id, $meta_key, $meta_value) );
	else
		$wpdb->query( $wpdb->prepare("DELETE FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = %s", $user_id, $meta_key) );

	clean_user_cache( $user_id );
--
			$metas = $wpdb->get_col( $wpdb->prepare("SELECT meta_value FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = %s", $user_id, $meta_key) );
	} else {
		$metas = $wpdb->get_col( $wpdb->prepare("SELECT meta_value FROM $wpdb->usermeta WHERE user_id = %d", $user_id) );
	}

--
	$cur = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = %s", $user_id, $meta_key) );

	if ( $cur )
--
		$wpdb->insert($wpdb->usermeta, compact('user_id', 'meta_key', 'meta_value') );
	else if ( $cur->meta_value != $meta_value )
		$wpdb->update($wpdb->usermeta, compact('meta_value'), compact('user_id', 'meta_key') );
	else
		return false;
--
		do_action( 'added_usermeta', $wpdb->insert_id, $user_id, $meta_key, $meta_value );
	else
		do_action( 'updated_usermeta', $cur->umeta_id, $user_id, $meta_key, $meta_value );
--
	$blog_prefix = $wpdb->get_blog_prefix($id);
	$users = $wpdb->get_results( "SELECT user_id, user_id AS ID, user_login, display_name, user_email, meta_value FROM $wpdb->users, $wpdb->usermeta WHERE {$wpdb->users}.ID = {$wpdb->usermeta}.user_id AND meta_key = '{$blog_prefix}capabilities' ORDER BY {$wpdb->usermeta}.user_id" );
	return $users;
}
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/deprecated.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/ms-load.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/ms-load.php');
#$aq = convertSQL2pg($aq);
/*
		$current_site->site_name = $wpdb->get_var( $wpdb->prepare( "SELECT meta_value FROM $wpdb->sitemeta WHERE site_id = %d AND meta_key = 'site_name'", $current_site->id ) );
		if ( ! $current_site->site_name )
			$current_site->site_name = ucfirst( $current_site->domain );
--
	$sites = $wpdb->get_results( "SELECT * FROM $wpdb->site" ); // usually only one site
	if ( 1 == count( $sites ) ) {
		$current_site = $sites[0];
--
		$current_site->blog_id = $wpdb->get_var( $wpdb->prepare( "SELECT blog_id FROM $wpdb->blogs WHERE domain = %s AND path = %s", $current_site->domain, $current_site->path ) );
		$current_site = get_current_site_name( $current_site );
		if ( substr( $current_site->domain, 0, 4 ) == 'www.' )
--
		$current_site = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->site WHERE domain = %s AND path = %s", $domain, $path ) );
	else
		$current_site = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->site WHERE domain IN ( %s, %s ) AND path = %s ORDER BY CHAR_LENGTH( domain ) DESC LIMIT 1", $domain, $cookie_domain, $path ) );

	if ( ! $current_site ) {
--
			$current_site = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->site WHERE domain = %s AND path='/'", $domain ) );
		else
			$current_site = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->site WHERE domain IN ( %s, %s ) AND path = '/' ORDER BY CHAR_LENGTH( domain ) DESC LIMIT 1", $domain, $cookie_domain, $path ) );
	}

--
		$current_site = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->site WHERE domain = %s AND path = %s", $sitedomain, $path) );
		if ( $current_site ) {
			$current_site->cookie_domain = $current_site->domain;
--
		$current_site = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->site WHERE domain = %s AND path='/'", $sitedomain) );
	}

--
 * Used when a blog's tables do not exist. Checks for a missing $wpdb->site table as well.
 *
 * @access private
--
	if ( ! $wpdb->get_var( "SHOW TABLES ILIKE '$wpdb->site'" ) )
		$msg .= '<p>' . sprintf( __( '<strong>Database tables are missing.</strong> This means that MySQL is not running, WordPress was not installed properly, or someone deleted <code>%s</code>. You really should look at your database now.' ), $wpdb->site ) . '</p>';
	else
		$msg .= '<p>' . sprintf( __( '<strong>Could not find site <code>%1$s</code>.</strong> Searched for table <code>%2$s</code> in database <code>%3$s</code>. Is that right?' ), rtrim( $domain . $path, '/' ), $wpdb->blogs, DB_NAME ) . '</p>';
	$msg .= '<p><strong>' . __( 'What do I do now?' ) . '</strong> ';
	$msg .= __( 'Read the <a target="_blank" href="http://codex.wordpress.org/Debugging_a_WordPress_Network">bug report</a> page. Some of the guidelines there may help you figure out what went wrong.' );
--
	foreach ( $wpdb->tables('global') as $t => $table ) {
		if ( 'sitecategories' == $t )
			continue;
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/ms-load.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/revision.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/revision.php');
#$aq = convertSQL2pg($aq);
/*
	$result = $wpdb->query( $wpdb->prepare( "INSERT IGNORE INTO \"$wpdb->options\" (\"option_name\", \"option_value\", \"autoload\") VALUES (%s, %s, 'no') /* LOCK */", $lock, $now ) );
	if ( ! $result ) {
		// If we couldn't get a lock, see how old the previous lock is
--
		$result = $wpdb->update( $wpdb->posts, $update, array( 'ID' => $this_revision->ID ) );

		if ( $result )
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/revision.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/comment.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/comment.php');
#$aq = convertSQL2pg($aq);
/*
			$ok_to_comment = $wpdb->get_var("SELECT comment_approved FROM $wpdb->comments WHERE comment_author = '$author' AND comment_author_email = '$email' and comment_approved = '1' LIMIT 1");
			if ( ( 1 == $ok_to_comment ) &&
				( empty($mod_keys) || false === strpos( $email, $mod_keys) ) )
--
	return $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_approved = '1' ORDER BY comment_date", $post_id));
}

--
			$_comment = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_ID = %d LIMIT 1", $comment));
			if ( ! $_comment )
				return $null;
--
			$approved = $wpdb->prepare( "comment_approved = %s", $status );
		else
			$approved = "( comment_approved = '0' OR comment_approved = '1' )";
--
					$ordersby[ $key ] = "$wpdb->commentmeta.meta_value";
				} elseif ( $value == 'meta_value_num' ) {
					$ordersby[ $key ] = "$wpdb->commentmeta.meta_value+0";
				}
			}
--
			$where .= $wpdb->prepare( ' AND comment_post_ID = %d', $post_id );
		if ( '' !== $author_email )
			$where .= $wpdb->prepare( ' AND comment_author_email = %s', $author_email );
		if ( '' !== $karma )
			$where .= $wpdb->prepare( ' AND comment_karma = %d', $karma );
		if ( 'comment' == $type ) {
			$where .= " AND comment_type = ''";
--
			$where .= $wpdb->prepare( ' AND comment_type = %s', $type );
		}
		if ( '' !== $parent )
			$where .= $wpdb->prepare( ' AND comment_parent = %d', $parent );
		if ( '' !== $user_id )
			$where .= $wpdb->prepare( ' AND user_id = %d', $user_id );
		if ( '' !== $search )
			$where .= $this->get_search_sql( $search, array( 'comment_author', 'comment_author_email', 'comment_author_url', 'comment_author_IP', 'comment_content' ) );
--
			$join = "JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->comments.comment_post_ID";
			foreach( $post_fields as $field_name => $field_value )
				$where .= $wpdb->prepare( " AND {$wpdb->posts}.{$field_name} = %s", $field_value );
		}

--
			$clauses = $this->meta_query->get_sql( 'comment', $wpdb->comments, 'comment_ID', $this );
			$join .= $clauses['join'];
			$where .= $clauses['where'];
			$groupby = "{$wpdb->comments}.comment_ID";
		}

--
		$query = "SELECT $fields FROM $wpdb->comments $join WHERE $where $groupby ORDER BY $orderby $order $limits";

		if ( $count )
			return $wpdb->get_var( $query );

		$comments = $wpdb->get_results( $query );
		/**
		 * Filter the comment query results.
--
			$lastcommentmodified = $wpdb->get_var("SELECT comment_date_gmt FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT 1");
			break;
		case 'blog':
			$lastcommentmodified = $wpdb->get_var("SELECT comment_date FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT 1");
			break;
		case 'server':
			$lastcommentmodified = $wpdb->get_var($wpdb->prepare("SELECT DATE_ADD(comment_date_gmt, INTERVAL %s SECOND) FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT 1", $add_seconds_server));
			break;
	}
--
		$where = $wpdb->prepare("WHERE comment_post_ID = %d", $post_id);
	}

	$totals = (array) $wpdb->get_results("
		SELECT comment_approved, COUNT( * ) AS total
		FROM {$wpdb->comments}
		{$where}
		GROUP BY comment_approved
--
	$dupe = $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_parent = %s AND comment_approved != 'trash' AND ( comment_author = %s ", wp_unslash( $comment_post_ID ), wp_unslash( $comment_parent ), wp_unslash( $comment_author ) );
	if ( $comment_author_email )
		$dupe .= $wpdb->prepare( "OR comment_author_email = %s ", wp_unslash( $comment_author_email ) );
	$dupe .= $wpdb->prepare( ") AND comment_content = %s LIMIT 1", wp_unslash( $comment_content ) );
	if ( $wpdb->get_var($dupe) ) {
		/**
		 * Fires immediately after a duplicate comment is detected.
--
		$post_author = $wpdb->get_var($wpdb->prepare("SELECT post_author FROM $wpdb->posts WHERE ID = %d LIMIT 1", $comment_post_ID));
	}

--
	if ( $lasttime = $wpdb->get_var( $wpdb->prepare( "SELECT \"comment_date_gmt\" FROM \"$wpdb->comments\" WHERE \"comment_date_gmt\" >= %s AND ( \"comment_author_IP\" = %s OR \"comment_author_email\" = %s ) ORDER BY \"comment_date_gmt\" DESC LIMIT 1", $hour_ago, $ip, $email ) ) ) {
		$time_lastcomment = mysql2date('U', $lasttime, false);
		$time_newcomment  = mysql2date('U', $date, false);
--
	$oldercoms = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(comment_ID) FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_parent = 0 AND comment_approved = '1' AND comment_date_gmt < '%s'" . $comtypewhere, $comment->comment_post_ID, $comment->comment_date_gmt ) );

	// No older comments? Then it's page #1.
--
		$where = $wpdb->prepare( "WHERE comment_post_ID = %d", $post_id );

	$count = $wpdb->get_results( "SELECT comment_approved, COUNT( * ) AS num_comments FROM {$wpdb->comments} {$where} GROUP BY comment_approved", ARRAY_A );

	$total = 0;
--
	$children = $wpdb->get_col( $wpdb->prepare("SELECT comment_ID FROM $wpdb->comments WHERE comment_parent = %d", $comment_id) );
	if ( !empty($children) ) {
		$wpdb->update($wpdb->comments, array('comment_parent' => $comment->comment_parent), array('comment_parent' => $comment_id));
		clean_comment_cache($children);
	}
--
	$meta_ids = $wpdb->get_col( $wpdb->prepare( "SELECT meta_id FROM $wpdb->commentmeta WHERE comment_id = %d", $comment_id ) );
	foreach ( $meta_ids as $mid )
		delete_metadata_by_mid( 'comment', $mid );
--
	if ( ! $wpdb->delete( $wpdb->comments, array( 'comment_ID' => $comment_id ) ) )
		return false;

--
	$wpdb->insert($wpdb->comments, $data);

	$id = (int) $wpdb->insert_id;

	if ( $comment_approved == 1 )
--
	if ( !$wpdb->update( $wpdb->comments, array('comment_approved' => $status), array('comment_ID' => $comment_id) ) ) {
		if ( $wp_error )
			return new WP_Error('db_update_error', __('Could not update comment status'), $wpdb->last_error);
		else
			return false;
--
	$rval = $wpdb->update( $wpdb->comments, $data, compact( 'comment_ID' ) );

	clean_comment_cache($comment_ID);
--
	$new = (int) $wpdb->get_var( $wpdb->prepare("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_approved = '1'", $post_id) );
	$wpdb->update( $wpdb->posts, array('comment_count' => $new), array('ID' => $post_id) );

	clean_post_cache( $post );
--
	while ($ping = $wpdb->get_row("SELECT ID, post_content, meta_id FROM {$wpdb->posts}, {$wpdb->postmeta} WHERE {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id AND {$wpdb->postmeta}.meta_key = '_pingme' LIMIT 1")) {
		delete_metadata_by_mid( 'post', $ping->meta_id );
		pingback( $ping->post_content, $ping->ID );
--
	while ($enclosure = $wpdb->get_row("SELECT ID, post_content, meta_id FROM {$wpdb->posts}, {$wpdb->postmeta} WHERE {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id AND {$wpdb->postmeta}.meta_key = '_encloseme' LIMIT 1")) {
		delete_metadata_by_mid( 'post', $enclosure->meta_id );
		do_enclose( $enclosure->post_content, $enclosure->ID );
--
	$trackbacks = $wpdb->get_col("SELECT ID FROM $wpdb->posts WHERE to_ping <> '' AND post_status = 'publish'");
	if ( is_array($trackbacks) )
		foreach ( $trackbacks as $trackback )
--
		$wpdb->update($wpdb->posts, array('to_ping' => ''), array('ID' => $post_id) );
		return;
	}
--
				$wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET to_ping = TRIM(REPLACE(to_ping, %s, '')) WHERE ID = %d", $tb_ping, $post_id) );
			}
		}
--
	$wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET pinged = CONCAT(pinged, '\n', %s) WHERE ID = %d", $trackback_url, $ID) );
	return $wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET to_ping = TRIM(REPLACE(to_ping, %s, '')) WHERE ID = %d", $trackback_url, $ID) );
}

*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/comment.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/meta.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/meta.php');
#$aq = convertSQL2pg($aq);
/*
	if ( $unique && $wpdb->get_var( $wpdb->prepare(
		"SELECT COUNT(*) FROM $table WHERE meta_key = %s AND $column = %d",
		$meta_key, $object_id ) ) )
--
	$result = $wpdb->insert( $table, array(
		$column => $object_id,
		'meta_key' => $meta_key,
--
	$mid = (int) $wpdb->insert_id;

	wp_cache_delete($object_id, $meta_type . '_meta');
--
	if ( ! $meta_id = $wpdb->get_var( $wpdb->prepare( "SELECT $id_column FROM $table WHERE meta_key = %s AND $column = %d", $meta_key, $object_id ) ) )
		return add_metadata($meta_type, $object_id, $meta_key, $passed_value);

--
	$result = $wpdb->update( $table, $data, $where );
	if ( ! $result )
		return false;
--
	$query = $wpdb->prepare( "SELECT $id_column FROM $table WHERE meta_key = %s", $meta_key );

	if ( !$delete_all )
		$query .= $wpdb->prepare(" AND $type_column = %d", $object_id );

	if ( $meta_value )
		$query .= $wpdb->prepare(" AND meta_value = %s", $meta_value );

	$meta_ids = $wpdb->get_col( $query );
	if ( !count( $meta_ids ) )
		return false;
--
		$object_ids = $wpdb->get_col( $wpdb->prepare( "SELECT $type_column FROM $table WHERE meta_key = %s", $meta_key ) );

	do_action( "delete_{$meta_type}_meta", $meta_ids, $object_id, $meta_key, $_meta_value );
--
	$count = $wpdb->query($query);

	if ( !$count )
--
	$meta = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE $id_column = %d", $meta_id ) );

	if ( empty( $meta ) )
--
		$result = $wpdb->update( $table, $data, $where, '%s', '%d' );
		if ( ! $result )
			return false;
--
		$result = (bool) $wpdb->delete( $table, array( $id_column => $meta_id ) );

		// Clear the caches.
--
	$meta_list = $wpdb->get_results( "SELECT $column, meta_key, meta_value FROM $table WHERE $column IN ($id_list) ORDER BY $id_column ASC", ARRAY_A );

	if ( !empty($meta_list) ) {
--
				$where["key-only-$key"] = $wpdb->prepare( "$meta_table.meta_key = %s", trim( $q['key'] ) );
		}

--
				$where[$k] = $wpdb->prepare( "$alias.meta_key = %s", $meta_key );

			if ( is_null( $meta_value ) ) {
--
			$where[$k] = ' (' . $where[$k] . $wpdb->prepare( "CAST($alias.meta_value AS {$meta_type}) {$meta_compare} {$meta_compare_string})", $meta_value );
		}

--
	if ( empty($wpdb->$table_name) )
		return false;

	return $wpdb->$table_name;
}

*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/meta.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/update.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/update.php');
#$aq = convertSQL2pg($aq);
/*
		$mysql_version = preg_replace('/[^0-9.].*/', '', $wpdb->db_version());
	else
		$mysql_version = 'N/A';
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/update.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/ms-functions.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/ms-functions.php');
#$aq = convertSQL2pg($aq);
/*
		$site_id = $wpdb->siteid;
	else
		$site_id = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM $wpdb->site WHERE domain = %s AND path = %s", $sitedomain, $path ) );

	if ( $site_id )
		return $wpdb->get_results( $wpdb->prepare( "SELECT u.ID, u.user_login, u.user_pass FROM $wpdb->users AS u, $wpdb->sitemeta AS sm WHERE sm.meta_key = 'admin_user_id' AND u.ID = sm.meta_value AND sm.site_id = %d", $site_id ), ARRAY_A );

	return false;
--
		return $blogs[$wpdb->blogid];

	$primary_blog = get_user_meta( $user_id, 'primary_blog', true );
--
				if ( $blog->site_id != $wpdb->siteid )
					continue;
				$details = get_blog_details( $blog_id );
--
		$wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET post_author = %d WHERE post_author = %d", $reassign, $user_id) );
		$wpdb->query( $wpdb->prepare("UPDATE $wpdb->links SET link_owner = %d WHERE link_owner = %d", $reassign, $user_id) );
	}

--
	$id = $wpdb->get_var( $wpdb->prepare( "SELECT blog_id FROM $wpdb->blogs WHERE domain = %s and path = %s /* get_blog_id_from_url */", $domain, $path ) );

	if ( ! $id ) {
--
	$signup = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->signups WHERE user_login = %s", $user_name) );
	if ( $signup != null ) {
		$registered_at =  mysql2date('U', $signup->registered);
--
			$wpdb->delete( $wpdb->signups, array( 'user_login' => $user_name ) );
		else
			$errors->add('user_name', __('That username is currently reserved but may be available in a couple of days.'));
--
	$signup = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->signups WHERE user_email = %s", $user_email) );
	if ( $signup != null ) {
		$diff = current_time( 'timestamp', true ) - mysql2date('U', $signup->registered);
--
			$wpdb->delete( $wpdb->signups, array( 'user_email' => $user_email ) );
		else
			$errors->add('user_email', __('That email address has already been used. Please check your inbox for an activation email. It will become available in a couple of days if you do nothing.'));
--
	if ( !is_subdomain_install() && $wpdb->get_var( $wpdb->prepare( "SELECT post_name FROM " . $wpdb->get_blog_prefix( $current_site->blog_id ) . "posts WHERE post_type = 'page' AND post_name = %s", $blogname ) ) )
		$errors->add( 'blogname', __( 'Sorry, you may not use that site name.' ) );

--
	$signup = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->signups WHERE domain = %s AND path = %s", $mydomain, $path) ); // TODO: Check email too?
	if ( ! empty($signup) ) {
		$diff = current_time( 'timestamp', true ) - mysql2date('U', $signup->registered);
--
			$wpdb->delete( $wpdb->signups, array( 'domain' => $mydomain , 'path' => $path ) );
		else
			$errors->add('blogname', __('That site is currently reserved but may be available in a couple days.'));
--
	$wpdb->insert( $wpdb->signups, array(
		'domain' => $domain,
		'path' => $path,
--
	$wpdb->insert( $wpdb->signups, array(
		'domain' => '',
		'path' => '',
--
	$signup = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $wpdb->signups WHERE activation_key = %s", $key) );

	if ( empty( $signup ) )
--
		$wpdb->update( $wpdb->signups, array('active' => 1, 'activated' => $now), array('activation_key' => $key) );

		if ( isset( $user_already_exists ) )
--
	$blog_id = wpmu_create_blog( $signup->domain, $signup->path, $signup->title, $user_id, $meta, $wpdb->siteid );

	// TODO: What to do if we create a user but cannot create a blog?
--
			$wpdb->update( $wpdb->signups, array( 'active' => 1, 'activated' => $now ), array( 'activation_key' => $key ) );
		}
		return $blog_id;
--
	$wpdb->update( $wpdb->signups, array('active' => 1, 'activated' => $now), array('activation_key' => $key) );
	wpmu_welcome_notification($blog_id, $user_id, $password, $signup->title, $meta);
	/**
--
	$result = $wpdb->get_var( $wpdb->prepare("SELECT blog_id FROM $wpdb->blogs WHERE domain = %s AND path = %s AND site_id = %d", $domain, $path, $site_id) );
	/**
	 * Filter whether a blogname is taken.
--
	$result = $wpdb->insert( $wpdb->blogs, array('site_id' => $site_id, 'domain' => $domain, 'path' => $path, 'registered' => current_time('mysql')) );
	if ( ! $result )
		return false;
--
	$blog_id = $wpdb->insert_id;
	refresh_blog_details( $blog_id );

--
	$suppress = $wpdb->suppress_errors();
	if ( $wpdb->get_results( "DESCRIBE {$wpdb->posts}" ) )
		die( '<h1>' . __( 'Already Installed' ) . '</h1><p>' . __( 'You appear to have already installed WordPress. To reinstall please clear your old database tables first.' ) . '</p></body></html>' );
	$wpdb->suppress_errors( $suppress );

	$url = get_blogaddress_by_id( $blog_id );
--
	$table_prefix = $wpdb->get_blog_prefix();
	delete_metadata( 'user', 0, $table_prefix . 'user_level',   null, true ); // delete all
	delete_metadata( 'user', 0, $table_prefix . 'capabilities', null, true ); // delete all
--
	$suppress = $wpdb->suppress_errors();

	wp_install_defaults($user_id);
--
	$wpdb->suppress_errors( $suppress );
}

--
		$prefix = $wpdb->get_blog_prefix( $blog->userblog_id );
		$recent_post = $wpdb->get_row( $wpdb->prepare("SELECT ID, post_date_gmt FROM {$prefix}posts WHERE post_author = %d AND post_type = 'post' AND post_status = 'publish' ORDER BY post_date_gmt DESC LIMIT 1", $user_id ), ARRAY_A);

		// Make sure we found a post
--
	update_option( 'post_count', (int) $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE post_status = 'publish' and post_type = 'post'" ) );
}

--
		$wpdb->insert( $wpdb->registration_log, array('email' => $user->user_email, 'IP' => preg_replace( '/[^0-9., ]/', '', wp_unslash( $_SERVER['REMOTE_ADDR'] ) ), 'blog_id' => $blog_id, 'date_registered' => current_time('mysql')) );
}

--
	$c = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->terms WHERE term_id = %d", $term_id ) );

	$global_id = $wpdb->get_var( $wpdb->prepare( "SELECT cat_ID FROM $wpdb->sitecategories WHERE category_nicename = %s", $c->slug ) );
	if ( $global_id == null ) {
		$used_global_id = $wpdb->get_var( $wpdb->prepare( "SELECT cat_ID FROM $wpdb->sitecategories WHERE cat_ID = %d", $c->term_id ) );
		if ( null == $used_global_id ) {
			$wpdb->insert( $wpdb->sitecategories, array( 'cat_ID' => $term_id, 'cat_name' => $c->name, 'category_nicename' => $c->slug ) );
			$global_id = $wpdb->insert_id;
			if ( empty( $global_id ) )
				return $term_id;
--
			$max_global_id = $wpdb->get_var( "SELECT MAX(cat_ID) FROM $wpdb->sitecategories" );
			$max_local_id = $wpdb->get_var( "SELECT MAX(term_id) FROM $wpdb->terms" );
			$new_global_id = max( $max_global_id, $max_local_id ) + mt_rand( 100, 400 );
			$wpdb->insert( $wpdb->sitecategories, array( 'cat_ID' => $new_global_id, 'cat_name' => $c->name, 'category_nicename' => $c->slug ) );
			$global_id = $wpdb->insert_id;
		}
	} elseif ( $global_id != $term_id ) {
		$local_id = $wpdb->get_row( $wpdb->prepare( "SELECT term_id FROM $wpdb->terms WHERE term_id = %d", $global_id ) );
		if ( null != $local_id )
			$local_id = global_terms( $local_id );
--
		$wpdb->update( $wpdb->terms, array('term_id' => $global_id), array('term_id' => $term_id) );
		$wpdb->update( $wpdb->term_taxonomy, array('term_id' => $global_id), array('term_id' => $term_id) );
		$wpdb->update( $wpdb->term_taxonomy, array('parent' => $global_id), array('parent' => $term_id) );

		clean_term_cache($term_id);
--
		$blog_id = $wpdb->blogid;

	$local_key = $wpdb->get_blog_prefix( $blog_id ) . $key;

	if ( isset( $current_user->$local_key ) )
--
	$count = $wpdb->get_var( $wpdb->prepare("SELECT COUNT(blog_id) as c FROM $wpdb->blogs WHERE site_id = %d AND spam = '0' AND deleted = '0' and archived = '0'", $wpdb->siteid) );
	update_site_option( 'blog_count', $count );
}
--
	$count = $wpdb->get_var( "SELECT COUNT(ID) as c FROM $wpdb->users WHERE spam = '0' AND deleted = '0'" );
	update_site_option( 'user_count', $count );
}
--
		'network_id' => $wpdb->siteid,
		'public'     => null,
		'archived'   => null,
--
	$query = "SELECT * FROM $wpdb->blogs WHERE 1=1 ";

	if ( isset( $args['network_id'] ) && ( is_array( $args['network_id'] ) || is_numeric( $args['network_id'] ) ) ) {
--
		$query .= $wpdb->prepare( "AND public = %d ", $args['public'] );

	if ( isset( $args['archived'] ) )
		$query .= $wpdb->prepare( "AND archived = %d ", $args['archived'] );

	if ( isset( $args['mature'] ) )
		$query .= $wpdb->prepare( "AND mature = %d ", $args['mature'] );

	if ( isset( $args['spam'] ) )
		$query .= $wpdb->prepare( "AND spam = %d ", $args['spam'] );

	if ( isset( $args['deleted'] ) )
		$query .= $wpdb->prepare( "AND deleted = %d ", $args['deleted'] );

	if ( isset( $args['limit'] ) && $args['limit'] ) {
--
			$query .= $wpdb->prepare( "LIMIT %d , %d ", $args['offset'], $args['limit'] );
		else
			$query .= $wpdb->prepare( "LIMIT %d ", $args['limit'] );
	}

	$site_results = $wpdb->get_results( $query, ARRAY_A );

	return $site_results;
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/ms-functions.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/ms-blogs.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/ms-blogs.php');
#$aq = convertSQL2pg($aq);
/*
	update_blog_details( $wpdb->blogid, array('last_updated' => current_time('mysql', true)) );
	/**
	 * Fires after the blog details are updated.
--
	do_action( 'wpmu_blog_updated', $wpdb->blogid );
}

--
	$blog_id = $wpdb->get_var( $wpdb->prepare("SELECT blog_id FROM {$wpdb->blogs} WHERE domain = %s AND path = %s", $domain, $path) );
	wp_cache_set( 'get_id_from_blogname_' . $slug, $blog_id, 'blog-details' );
	return $blog_id;
--
				$blog = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->blogs WHERE domain IN (%s,%s) AND path = %s ORDER BY CHAR_LENGTH(domain) DESC", $nowww, $fields['domain'], $fields['path'] ) );
			} else {
				$blog = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->blogs WHERE domain = %s AND path = %s", $fields['domain'], $fields['path'] ) );
			}
			if ( $blog ) {
--
				$blog = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->blogs WHERE domain IN (%s,%s) ORDER BY CHAR_LENGTH(domain) DESC", $nowww, $fields['domain'] ) );
			} else {
				$blog = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->blogs WHERE domain = %s", $fields['domain'] ) );
			}
			if ( $blog ) {
--
		$details = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->blogs WHERE blog_id = %d /* get_blog_details */", $blog_id ) );
		if ( ! $details ) {
			// Set the full cache.
--
	$result = $wpdb->update( $wpdb->blogs, $update_details, array('blog_id' => $blog_id) );

	if ( false === $result )
--
	$wpdb->set_blog_id( $new_blog );
	$GLOBALS['table_prefix'] = $wpdb->get_blog_prefix();
	$prev_blog_id = $GLOBALS['blog_id'];
	$GLOBALS['blog_id'] = $new_blog;
--
	$wpdb->set_blog_id( $blog );
	$prev_blog_id = $GLOBALS['blog_id'];
	$GLOBALS['blog_id'] = $blog;
	$GLOBALS['table_prefix'] = $wpdb->get_blog_prefix();

	if ( function_exists( 'wp_cache_switch_to_blog' ) ) {
--
	$result = $wpdb->update( $wpdb->blogs, array($pref => $value, 'last_updated' => current_time('mysql', true)), array('blog_id' => $blog_id) );

	if ( false === $result )
--
	return $wpdb->get_var( $wpdb->prepare("SELECT %s FROM {$wpdb->blogs} WHERE blog_id = %d", $pref, $id) );
}

--
	return $wpdb->get_results( $wpdb->prepare("SELECT blog_id, domain, path FROM $wpdb->blogs WHERE site_id = %d AND public = '1' AND archived = '0' AND mature = '0' AND spam = '0' AND deleted = '0' AND last_updated != '0000-00-00 00:00:00' ORDER BY last_updated DESC limit %d, %d", $wpdb->siteid, $start, $quantity ) , ARRAY_A );
}

*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/ms-blogs.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/post-template.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/post-template.php');
#$aq = convertSQL2pg($aq);
/*
		if ( $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE post_parent = %d AND post_type = 'page' AND post_status = 'publish' LIMIT 1", $page_id) ) )
			$classes[] = 'page-parent';

*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/post-template.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/taxonomy.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/taxonomy.php');
#$aq = convertSQL2pg($aq);
/*
	$object_ids = $wpdb->get_col("SELECT tr.object_id FROM $wpdb->term_relationships AS tr INNER JOIN $wpdb->term_taxonomy AS tt ON tr.term_taxonomy_id = tt.term_taxonomy_id WHERE tt.taxonomy IN ($taxonomies) AND tt.term_id IN ($term_ids) ORDER BY tr.object_id $order");

	if ( ! $object_ids )
--
				$alias = $i ? 'tt' . $i : $wpdb->term_relationships;

				$join .= " INNER JOIN $wpdb->term_relationships";
				$join .= $i ? " AS $alias" : '';
				$join .= " ON ($primary_table.$primary_id_column = $alias.object_id)";
--
					FROM $wpdb->term_relationships
					WHERE term_taxonomy_id IN ($terms)
				)";
--
					FROM $wpdb->term_relationships
					WHERE term_taxonomy_id IN ($terms)
					AND object_id = $primary_table.$primary_id_column
--
				$terms = $wpdb->get_col( "
					SELECT $wpdb->term_taxonomy.$resulting_field
					FROM $wpdb->term_taxonomy
					INNER JOIN $wpdb->terms USING (term_id)
					WHERE taxonomy = '{$query['taxonomy']}'
					AND $wpdb->terms.{$query['field']} IN ($terms)
				" );
				break;
--
				$terms = $wpdb->get_col( "
					SELECT $resulting_field
					FROM $wpdb->term_taxonomy
					WHERE term_taxonomy_id IN ($terms)
				" );
--
				$terms = $wpdb->get_col( "
					SELECT $resulting_field
					FROM $wpdb->term_taxonomy
					WHERE taxonomy = '{$query['taxonomy']}'
					AND term_id IN ($terms)
--
			$_term = $wpdb->get_row( $wpdb->prepare( "SELECT t.*, tt.* FROM $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id WHERE tt.taxonomy = %s AND t.term_id = %d LIMIT 1", $taxonomy, $term) );
			if ( ! $_term )
				return $null;
--
	$term = $wpdb->get_row( $wpdb->prepare( "SELECT t.*, tt.* FROM $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id WHERE tt.taxonomy = %s AND $field = %s LIMIT 1", $taxonomy, $value) );
	if ( !$term )
		return false;
--
		$where .= $wpdb->prepare( " AND t.name ILIKE %s", '%' . $name__like . '%' );
	}

--
		$where .= $wpdb->prepare( " AND tt.description ILIKE %s", '%' . $description__like . '%' );
	}

--
		$where .= $wpdb->prepare( ' AND ((t.name ILIKE %s) OR (t.slug ILIKE %s))', '%' . $search . '%', '%' . $search . '%' );
	}

--
	$join = "INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id";

	$pieces = array( 'fields', 'join', 'where', 'orderby', 'order', 'limits' );
--
	$query = "SELECT $fields FROM $wpdb->terms AS t $join WHERE $where $orderby $order $limits";

	$fields = $_fields;
--
		$term_count = $wpdb->get_var($query);
		return $term_count;
	}
--
	$terms = $wpdb->get_results($query);
	if ( 'all' == $fields ) {
		update_term_cache($terms);
--
	$select = "SELECT term_id FROM $wpdb->terms as t WHERE ";
	$tax_select = "SELECT tt.term_id, tt.term_taxonomy_id FROM $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy as tt ON tt.term_id = t.term_id WHERE ";

	if ( is_int($term) ) {
--
			return $wpdb->get_row( $wpdb->prepare( $tax_select . $where . " AND tt.taxonomy = %s", $term, $taxonomy ), ARRAY_A );
		else
			return $wpdb->get_var( $wpdb->prepare( $select . $where, $term ) );
	}

--
		if ( $result = $wpdb->get_row( $wpdb->prepare("SELECT tt.term_id, tt.term_taxonomy_id FROM $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy as tt ON tt.term_id = t.term_id WHERE $where AND tt.taxonomy = %s", $where_fields), ARRAY_A) )
			return $result;

		return $wpdb->get_row( $wpdb->prepare("SELECT tt.term_id, tt.term_taxonomy_id FROM $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy as tt ON tt.term_id = t.term_id WHERE $else_where AND tt.taxonomy = %s", $else_where_fields), ARRAY_A);
	}

	if ( $result = $wpdb->get_var( $wpdb->prepare("SELECT term_id FROM $wpdb->terms as t WHERE $where", $where_fields) ) )
		return $result;

	return $wpdb->get_var( $wpdb->prepare("SELECT term_id FROM $wpdb->terms as t WHERE $else_where", $else_where_fields) );
}

--
		$edit_tt_ids = $wpdb->get_col( "SELECT \"term_taxonomy_id\" FROM $wpdb->term_taxonomy WHERE \"parent\" = " . (int)$term_obj->term_id );
		do_action( 'edit_term_taxonomies', $edit_tt_ids );
		$wpdb->update( $wpdb->term_taxonomy, compact( 'parent' ), array( 'parent' => $term_obj->term_id) + compact( 'taxonomy' ) );
		do_action( 'edited_term_taxonomies', $edit_tt_ids );
	}
--
	$objects = $wpdb->get_col( $wpdb->prepare( "SELECT object_id FROM $wpdb->term_relationships WHERE term_taxonomy_id = %d", $tt_id ) );

	foreach ( (array) $objects as $object ) {
--
	$wpdb->delete( $wpdb->term_taxonomy, array( 'term_taxonomy_id' => $tt_id ) );
	do_action( 'deleted_term_taxonomy', $tt_id );

--
	if ( !$wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->term_taxonomy WHERE term_id = %d", $term) ) )
		$wpdb->delete( $wpdb->terms, array( 'term_id' => $term ) );

	clean_term_cache($term, $taxonomy);
--
	$query = "SELECT $select_this FROM $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy AS tt ON tt.term_id = t.term_id INNER JOIN $wpdb->term_relationships AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id WHERE tt.taxonomy IN ($taxonomies) AND tr.object_id IN ($object_ids) $orderby $order";

	if ( 'all' == $fields || 'all_with_object_id' == $fields ) {
		$_terms = $wpdb->get_results( $query );
		foreach ( $_terms as $key => $term ) {
			$_terms[$key] = sanitize_term( $term, $taxonomy, 'raw' );
--
		$_terms = $wpdb->get_col( $query );
		$_field = ( 'ids' == $fields ) ? 'term_id' : 'name';
		foreach ( $_terms as $key => $term ) {
--
		$terms = $wpdb->get_col("SELECT tr.term_taxonomy_id FROM $wpdb->term_relationships AS tr INNER JOIN $wpdb->term_taxonomy AS tt ON tr.term_taxonomy_id = tt.term_taxonomy_id WHERE tr.object_id IN ($object_ids) AND tt.taxonomy IN ($taxonomies) $orderby $order");
		foreach ( $terms as $key => $tt_id ) {
			$terms[$key] = sanitize_term_field( 'term_taxonomy_id', $tt_id, 0, $taxonomy, 'raw' ); // 0 should be the term id, however is not needed when using raw context.
--
		$alias = $wpdb->get_row( $wpdb->prepare( "SELECT term_id, term_group FROM $wpdb->terms WHERE slug = %s", $alias_of) );
		if ( $alias->term_group ) {
			// The alias we want is already in a group, so let's use that one.
--
			$term_group = $wpdb->get_var("SELECT MAX(term_group) FROM $wpdb->terms") + 1;
			do_action( 'edit_terms', $alias->term_id, $taxonomy );
			$wpdb->update($wpdb->terms, compact('term_group'), array('term_id' => $alias->term_id) );
			do_action( 'edited_terms', $alias->term_id, $taxonomy );
		}
--
		$existing_term = $wpdb->get_row( $wpdb->prepare( "SELECT name FROM $wpdb->terms WHERE term_id = %d", $term_id), ARRAY_A );
		// We've got an existing term in the same taxonomy, which matches the name of the new term:
		if ( is_taxonomy_hierarchical($taxonomy) && $existing_term['name'] == $name && $exists = term_exists( (int) $term_id, $taxonomy ) ) {
--
				if ( false === $wpdb->insert( $wpdb->terms, compact( 'name', 'slug', 'term_group' ) ) )
					return new WP_Error('db_insert_error', __('Could not insert term into the database'), $wpdb->last_error);
				$term_id = (int) $wpdb->insert_id;
			}
		} elseif ( $existing_term['name'] != $name ) {
--
			if ( false === $wpdb->insert( $wpdb->terms, compact( 'name', 'slug', 'term_group' ) ) )
				return new WP_Error('db_insert_error', __('Could not insert term into the database'), $wpdb->last_error);
			$term_id = (int) $wpdb->insert_id;
		} elseif ( $exists = term_exists( (int) $term_id, $taxonomy ) )  {
			// Same name, same slug.
--
		if ( false === $wpdb->insert( $wpdb->terms, compact( 'name', 'slug', 'term_group' ) ) )
			return new WP_Error('db_insert_error', __('Could not insert term into the database'), $wpdb->last_error);
		$term_id = (int) $wpdb->insert_id;
	}

--
		$wpdb->update( $wpdb->terms, compact( 'slug' ), compact( 'term_id' ) );
		do_action( 'edited_terms', $term_id, $taxonomy );
	}
--
	$tt_id = $wpdb->get_var( $wpdb->prepare( "SELECT tt.term_taxonomy_id FROM $wpdb->term_taxonomy AS tt INNER JOIN $wpdb->terms AS t ON tt.term_id = t.term_id WHERE tt.taxonomy = %s AND t.term_id = %d", $taxonomy, $term_id ) );

	if ( !empty($tt_id) )
--
	$wpdb->insert( $wpdb->term_taxonomy, compact( 'term_id', 'taxonomy', 'description', 'parent') + array( 'count' => 0 ) );
	$tt_id = (int) $wpdb->insert_id;

	do_action("create_term", $term_id, $tt_id, $taxonomy);
--
		if ( $wpdb->get_var( $wpdb->prepare( "SELECT term_taxonomy_id FROM $wpdb->term_relationships WHERE object_id = %d AND term_taxonomy_id = %d", $object_id, $tt_id ) ) )
			continue;
		do_action( 'add_term_relationship', $object_id, $tt_id );
		$wpdb->insert( $wpdb->term_relationships, array( 'object_id' => $object_id, 'term_taxonomy_id' => $tt_id ) );
		do_action( 'added_term_relationship', $object_id, $tt_id );
		$new_tt_ids[] = $tt_id;
--
			$delete_term_ids = $wpdb->get_col( $wpdb->prepare( "SELECT tt.term_id FROM $wpdb->term_taxonomy AS tt WHERE tt.taxonomy = %s AND tt.term_taxonomy_id IN ($in_delete_tt_ids)", $taxonomy ) );
			$delete_term_ids = array_map( 'intval', $delete_term_ids );

--
				$values[] = $wpdb->prepare( "(%d, %d, %d)", $object_id, $tt_id, ++$term_order);
		if ( $values )
			if ( false === $wpdb->query( "INSERT INTO $wpdb->term_relationships (object_id, term_taxonomy_id, term_order) VALUES " . join( ',', $values ) . " ON DUPLICATE KEY UPDATE term_order = VALUES(term_order)" ) )
				return new WP_Error( 'db_insert_error', __( 'Could not insert term relationship into the database' ), $wpdb->last_error );
	}

--
		$deleted = $wpdb->query( $wpdb->prepare( "DELETE FROM $wpdb->term_relationships WHERE object_id = %d AND term_taxonomy_id IN ($in_tt_ids)", $object_id ) );
		do_action( 'deleted_term_relationships', $object_id, $tt_ids );
		wp_update_term_count( $tt_ids, $taxonomy );
--
		$query = $wpdb->prepare( "SELECT slug FROM $wpdb->terms WHERE slug = %s AND term_id != %d", $slug, $term->term_id );
	else
		$query = $wpdb->prepare( "SELECT slug FROM $wpdb->terms WHERE slug = %s", $slug );

	if ( $wpdb->get_var( $query ) ) {
		$num = 2;
		do {
--
			$slug_check = $wpdb->get_var( $wpdb->prepare( "SELECT slug FROM $wpdb->terms WHERE slug = %s", $alt_slug ) );
		} while ( $slug_check );
		$slug = $alt_slug;
--
		$alias = $wpdb->get_row( $wpdb->prepare( "SELECT term_id, term_group FROM $wpdb->terms WHERE slug = %s", $alias_of) );
		if ( $alias->term_group ) {
			// The alias we want is already in a group, so let's use that one.
--
			$term_group = $wpdb->get_var("SELECT MAX(term_group) FROM $wpdb->terms") + 1;
			do_action( 'edit_terms', $alias->term_id, $taxonomy );
			$wpdb->update( $wpdb->terms, compact('term_group'), array( 'term_id' => $alias->term_id ) );
			do_action( 'edited_terms', $alias->term_id, $taxonomy );
		}
--
	$id = $wpdb->get_var( $wpdb->prepare( "SELECT term_id FROM $wpdb->terms WHERE slug = %s", $slug ) );
	if ( $id && ($id != $term_id) ) {
		// If an empty slug was passed or the parent changed, reset the slug to something unique.
--
	$wpdb->update($wpdb->terms, compact( 'name', 'slug', 'term_group' ), compact( 'term_id' ) );
	if ( empty($slug) ) {
		$slug = sanitize_title($name, $term_id);
		$wpdb->update( $wpdb->terms, compact( 'slug' ), compact( 'term_id' ) );
	}
	do_action( 'edited_terms', $term_id, $taxonomy );
--
	$tt_id = $wpdb->get_var( $wpdb->prepare( "SELECT tt.term_taxonomy_id FROM $wpdb->term_taxonomy AS tt INNER JOIN $wpdb->terms AS t ON tt.term_id = t.term_id WHERE tt.taxonomy = %s AND t.term_id = %d", $taxonomy, $term_id) );
	do_action( 'edit_term_taxonomy', $tt_id, $taxonomy );
	$wpdb->update( $wpdb->term_taxonomy, compact( 'term_id', 'taxonomy', 'description', 'parent' ), array( 'term_taxonomy_id' => $tt_id ) );
	do_action( 'edited_term_taxonomy', $tt_id, $taxonomy );

--
		$terms = $wpdb->get_results("SELECT term_id, taxonomy FROM $wpdb->term_taxonomy WHERE term_taxonomy_id IN ($tt_ids)");
		$ids = array();
		foreach ( (array) $terms as $term ) {
--
	$results = $wpdb->get_results("SELECT object_id, term_taxonomy_id FROM $wpdb->term_relationships INNER JOIN $wpdb->posts ON object_id = ID WHERE term_taxonomy_id IN (" . implode(',', array_keys($term_ids)) . ") AND post_type IN ('" . implode("', '", $object_types) . "') AND post_status = 'publish'");
	foreach ( $results as $row ) {
		$id = $term_ids[$row->term_taxonomy_id];
--
			$count += (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->term_relationships, $wpdb->posts p1 WHERE p1.ID = $wpdb->term_relationships.object_id AND ( post_status = 'publish' OR ( post_status = 'inherit' AND post_parent > 0 AND ( SELECT post_status FROM $wpdb->posts WHERE ID = p1.post_parent ) = 'publish' ) ) AND post_type = 'attachment' AND term_taxonomy_id = %d", $term ) );

		if ( $object_types )
			$count += (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->term_relationships, $wpdb->posts WHERE $wpdb->posts.ID = $wpdb->term_relationships.object_id AND post_status = 'publish' AND post_type IN ('" . implode("', '", $object_types ) . "') AND term_taxonomy_id = %d", $term ) );

		do_action( 'edit_term_taxonomy', $term, $taxonomy );
		$wpdb->update( $wpdb->term_taxonomy, compact( 'count' ), array( 'term_taxonomy_id' => $term ) );
		do_action( 'edited_term_taxonomy', $term, $taxonomy );
	}
--
		$count = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->term_relationships WHERE term_taxonomy_id = %d", $term ) );

		do_action( 'edit_term_taxonomy', $term, $taxonomy );
		$wpdb->update( $wpdb->term_taxonomy, compact( 'count' ), array( 'term_taxonomy_id' => $term ) );
		do_action( 'edited_term_taxonomy', $term, $taxonomy );
	}
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/taxonomy.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/bookmark.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/bookmark.php');
#$aq = convertSQL2pg($aq);
/*
			$_bookmark = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->links WHERE link_id = %d LIMIT 1", $bookmark));
			if ( $_bookmark ) {
				$_bookmark->link_category = array_unique( wp_get_object_terms( $_bookmark->link_id, 'link_category', array( 'fields' => 'ids' ) ) );
--
		$join = " INNER JOIN $wpdb->term_relationships AS tr ON ($wpdb->links.link_id = tr.object_id) INNER JOIN $wpdb->term_taxonomy as tt ON tt.term_taxonomy_id = tr.term_taxonomy_id";
	}

--
			$orderby = "$wpdb->links.link_id";
			break;
		default:
--
	$query = "SELECT * $length $recently_updated_test $get_updated FROM $wpdb->links $join WHERE 1=1 $visible $category_query";
	$query .= " $exclusions $inclusions $search";
	$query .= " ORDER BY $orderby $order";
--
	$results = $wpdb->get_results($query);

	$cache[ $key ] = $results;
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/bookmark.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/http.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/http.php');
#$aq = convertSQL2pg($aq);
/*
	$queried[ $host ] = (bool) $wpdb->get_var( $wpdb->prepare( "SELECT domain FROM $wpdb->blogs WHERE domain = %s LIMIT 1", $host ) );
	return $queried[ $host ];
}
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/http.php',$aq);
#Arquivo /var/www/wordpress/wp-includes/ms-settings.php
$aq = file_get_contents('/var/www/wordpress/wp-includes/ms-settings.php');
#$aq = convertSQL2pg($aq);
/*
		$current_site->blog_id = $wpdb->get_var( $wpdb->prepare( "SELECT blog_id FROM $wpdb->blogs WHERE domain = %s AND path = %s", $current_site->domain, $current_site->path ) );

	if ( is_subdomain_install() ) {
--
			$current_site = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->site WHERE id = %d", $current_blog->site_id ) );
			if ( ! isset( $current_site->blog_id ) )
				$current_site->blog_id = $wpdb->get_var( $wpdb->prepare( "SELECT blog_id FROM $wpdb->blogs WHERE domain = %s AND path = %s", $current_site->domain, $current_site->path ) );
		} else
			$blogname = substr( $domain, 0, strpos( $domain, '.' ) );
--
			$msg = ! $wpdb->get_var( "SHOW TABLES ILIKE '$wpdb->site'" ) ? ' ' . __( 'Database tables are missing.' ) : '';
			wp_die( __( 'No site by that name on this system.' ) . $msg );
		}
--
$wpdb->set_prefix( $table_prefix, false ); // $table_prefix can be set in sunrise.php
$wpdb->set_blog_id( $current_blog->blog_id, $current_blog->site_id );
$table_prefix = $wpdb->get_blog_prefix();
$_wp_switched_stack = array();
$switched = false;
*/
file_put_contents('/var/www/wordpress/wppg/wp-includes/ms-settings.php',$aq);
#Arquivo /var/www/wordpress/wp-login.php
$aq = file_get_contents('/var/www/wordpress/wp-login.php');
#$aq = convertSQL2pg($aq);
/*
	$wpdb->update( $wpdb->users, array( 'user_activation_key' => $hashed ), array( 'user_login' => $user_login ) );

	$message = __('Someone requested that the password be reset for the following account:') . "\r\n\r\n";
*/
file_put_contents('/var/www/wordpress/wppg/wp-login.php',$aq);
#Arquivo /var/www/wordpress/wp-cron.php
$aq = file_get_contents('/var/www/wordpress/wp-cron.php');
#$aq = convertSQL2pg($aq);
/*
		$row = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", '_transient_doing_cron' ) );
		if ( is_object( $row ) )
			$value = $row->option_value;
*/
file_put_contents('/var/www/wordpress/wppg/wp-cron.php',$aq);
#Arquivo /var/www/wordpress/wp-trackback.php
$aq = file_get_contents('/var/www/wordpress/wp-trackback.php');
#$aq = convertSQL2pg($aq);
/*
	$dupe = $wpdb->get_results( $wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_author_url = %s", $comment_post_ID, $comment_author_url) );
	if ( $dupe )
		trackback_response(1, 'We already have a ping from that URL for this post.');
--
	$trackback_id = $wpdb->insert_id;

	/**
*/
file_put_contents('/var/www/wordpress/wppg/wp-trackback.php',$aq);
#Arquivo /var/www/wordpress/pg4wp/driver_pgsql.php
$aq = file_get_contents('/var/www/wordpress/pg4wp/driver_pgsql.php');
#$aq = convertSQL2pg($aq);
/*
		if( $table == $wpdb->term_relationships)
		{
			$sql = 'NO QUERY';
--
			$sql = str_replace('GROUP BY '.$wpdb->prefix.'posts.ID', '' , $sql);
			$sql = str_replace("!= ''", '<> 0', $sql);
			
--
			if( false !== strpos( $sql, $wpdb->comments))
				$sql = str_replace(' comment_id ', ' comment_ID ', $sql);
			
--
			if( false !== strpos($sql, 'INSERT INTO '.$wpdb->categories))
			{
				$sql = str_replace('"cat_ID",', '', $sql);
--
			if( false !== strpos( $sql, $wpdb->options) && false !== strpos( $sql, '), ('))
			{
				$pattern = '/INSERT INTO.+VALUES/';
--
				if( !in_array(trim($matches[1],'` '), array($wpdb->posts,$wpdb->comments)))
				{
					// Remove 'ON DUPLICATE KEY UPDATE...' and following
--
			if( defined('WP_INSTALLING') && WP_INSTALLING && false !== strpos($sql, 'INSERT INTO `'.$wpdb->terms.'`'))
				$end .= ';SELECT setval(\''.$wpdb->terms.'_seq\', (SELECT MAX(term_id) FROM '.$wpdb->terms.')+1);';
			
		} // INSERT
--
				$sql = "DELETE FROM $wpdb->options WHERE option_id IN " .
					"(SELECT o1.option_id FROM $wpdb->options AS o1, $wpdb->options AS o2 " .
					"WHERE o1.option_name = o2.option_name " .
					"AND o1.option_id < o2.option_id)";
--
			if( false !== strpos( $sql, $wpdb->comments))
				$sql = str_replace(' comment_id ', ' comment_ID ', $sql);
		}
*/
file_put_contents('/var/www/wordpress/wppg/pg4wp/driver_pgsql.php',$aq);
