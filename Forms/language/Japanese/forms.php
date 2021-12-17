<?php 
/*
 *	Made by Partydragen
 *  https://github.com/partydragen/Nameless-Forms
 *  https://partydragen.com/
 *  NamelessMC version 2.0.0-pr11
 *
 *  License: MIT
 *
 *  Japanese Language for Forms module
 */

$language = array(
	// Forms
	'forms' => 'Forms',
	'form' => 'フォーム',
	'new_form' => '新しいフォーム',
	'form_name' => 'フォームの名前',
	'form_url' => 'フォームのURL(前に/を付けます。例:/example)',
	'form_icon' => 'フォームアイコン',
	'link_location' => 'リンクの場所',
	'creating_new_form' => '新しいフォームの作成',
	'form_created_successfully' => 'フォームが正常に作成されました',
	'none_forms_defined' => 'まだフォームはありません。',
	'delete_form' => 'このフォームを削除してもよろしいですか？</br>警告：このフォームに属するすべてのデータは、質問や送信のように削除されます',
	'form_submitted' => 'フォームが正常に送信されました',
	'action' => 'アクション',
	'actions' => 'アクション',
	'guest' => 'ゲスト',
	
	// Permissions
	'forms_view_submissions' => 'StaffCP &raquo; Forms &raquo; Submissions',
	'forms_manage' => 'StaffCP &raquo; Forms &raquo; Forms',
    'can_post_submission' => '提出を投稿できます',
    'can_view_own_submission' => '自分の提出物を見ることができます',
    'can_view_submissions' => '提出物を表示できます',
    'can_delete_submissions' => '提出物を削除できます',
    'show_navigation_link_for_guest' => 'ゲストのナビゲーションリンクを表示し、投稿の許可がない場合はログインするように依頼します',
	
	// Form
	'editing_x' => 'Editing {x}', // Don't replace {x}
	'form_created_successfully' => 'フォームが正常に作成されました。',
	'form_updated_successfully' => 'フォームが正常に更新されました。',
	'form_deleted_successfully' => 'フォームが正常に削除されました。',
    'enable_captcha' => 'このフォームでキャプチャを有効にしますか？',
	
	// Fields
	'field' => 'フィールド',
	'fields' => 'フィールド',
	'new_field' => '新しいフィールド',
	'field_name' => 'フィールドの名前',
	'field_created_successfully' => 'フィールドが正常に作成されました',
	'field_updated_successfully' => 'フィールドが正常に更新されました',
	'field_deleted_successfully' => 'フィールドが正常に削除されました',
	'new_field_for_x' => '{x} の新しいフィールドを作成する',
	'editing_field_for_x' => '{x} の編集フィールド',
	'none_fields_defined' => 'まだフィールドはありません。',
	'confirm_delete_field' => 'このフィールドを削除してもよろしいですか？',
	'options' => 'オプション',
	'options_help' => '新しい行の各オプション。 空のままにすることができます（オプションのみ）。 ヘルプテキストもこのボックス内に配置する必要があります。',
	'field_order' => 'フィールドオーダー',
	'delete_field' => 'このフィールドを削除してもよろしいですか？',
	'help_box' => 'ヘルプテキスト',
	'barrier' => '境界線',
    'number' => '数字',
    'radio' => 'ラジオボタン',
    'checkbox' => 'Checkbox',
    'minimum_characters' => '最小文字数(無効にする場合は0)',
    'maximum_characters' => '最大文字数(無効にする場合は0)',

	// Statuses
	'statuses' => 'ステータス',
	'status' => 'ステータス',
	'new_status' => '新しいステータス',
	'creating_status' => '新しいステータスの作成',
	'editing_status' => '編集状況',
	'marked_as_open' => 'オープンとしてマーク',
	'status_name' => 'ステータス名',
	'status_html' => 'ステータスHTML',
	'status_forms' => 'このステータスが表示されるフォームを選択します。 (Ctrlキーを押しながらクリックして複数を選択/選択解除します)',
	'status_groups' => 'このステータスを選択できるグループを選択してください。 (trlキーを押しながらクリックして複数を選択/選択解除します)',
	'status_creation_success' => 'ステータスは正常に作成されました。',
	'status_creation_error' => 'ステータスの作成中にエラーが発生しました。 ステータスhtmlが1024文字以下であることを確認してください。',
	'status_edit_success' => 'ステータスは正常に編集されました。',
	'status_deleted_successfully' => 'ステータスは正常に削除されました。',
	'delete_status' => 'このステータスを削除してもよろしいですか？',
    'select_statuses_to_form' => 'このフォームで使用するステータスを選択してください',
    'change_status_on_comment' => 'ユーザーがコメントしているときにステータスを変更しますか？',
    
	// Errors
	'input_form_name' => 'フォーム名を入力してください。',
	'input_form_url' => 'フォームのURLを入力してください。',
	'form_name_minimum' => 'フォーム名は2文字以上である必要があります。',
	'form_url_minimum' => 'フォームのURLは2文字以上である必要があります。',
	'form_name_maximum' => 'フォーム名は最大32文字である必要があります。',
	'form_url_maximum' => 'フォームのURLは最大32文字である必要があります。',
	'form_icon_maximum' => 'フォームアイコンは最大64文字である必要があります。',
	'input_field_name' => 'フィールド名を入力してください。',
	'field_name_minimum' => 'フィールド名は2文字以上である必要があります。',
	'field_name_maximum' => 'フィールド名は最大255文字である必要があります。',
    'x_field_minimum_y' => '{x} は {y} 文字以上である必要があります。',
    'x_field_maximum_y' => '{x} は最大 {y} 文字である必要があります。',
	
	// Submissions
	'submissions' => '提出物',
	'submission_updated' => '提出物は正常に更新されました',
	'no_open_submissions' => '現在、未解決の提出物はありません。',
	'no_closed_submissions' => '現在、クローズされた提出物はありません。',
	'form_x' => 'フォーム: {x}',
	'current_status_x' => '現在の状態: {x}',
	'last_updated' => '最終更新:',
	'your_submission_updated' => '提出物が更新されました',
	'user' => 'ユーザー',
	'updated_by' => '更新者',
	'sort' => 'ソート',
    'id_or_username' => 'IDまたはユーザー名',
    'confirm_delete_comment' => 'このコメントを削除してもよろしいですか？',
    'confirm_delete_submisssion' => 'この提出物を削除してもよろしいですか？',
    'delete_submissions_or_comments' => '提出物またはコメントを削除する',
    'no_comment' => 'コメント無し',
    'anonymous' => '匿名',
    'submit_as_anonymous' => '匿名で送信',
    'send_notify_email' => '通知メールを送信します(送信速度が遅くなります)',
	
	// Update alerts
	'new_update_available_x' => 'モジュール {x} で利用可能な新しいアップデートがあります',
	'new_urgent_update_available_x' => 'モジュール {x} で利用可能な新しい緊急アップデートがあります。 できるだけ早く更新してください！',
	'current_version_x' => '現在のモジュールバージョン: {x}',
	'new_version_x' => '新しいモジュールバージョン: {x}',
	'view_resource' => 'リソースを表示',
    
    // Hook
    'new_form_submission' => '新しいフォームの送信',
    'updated_form_submission' => '新しいフォーム送信コメント',
    'new_submission_text' => '{y} によって {x} で作成された新しい提出物',
    'updated_submission_text' => '{y} による {x} の新しい提出コメント',
    
    // Email
    'submission_updated_subject' => '{x} の提出物が更新されました',
    'submission_updated_message' => '
        {form} への送信に関する更新がありました。</br>
        </br>
        現在の状態: {status}</br>
        最終更新: {updated_by}</br>
        コメント: {comment}</br>
        </br>
        <a href="{link}"> {link} </a>をクリックすると、提出物と更新の全文を表示できます。
    '
);
