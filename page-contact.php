<?php
/*
Template Name: お問い合わせ
*/
?>


<?php get_header(); ?>


<!------------------------------- お問い合わせ -------------------------------------->
<div class="background_other">
  <h1>CONTACT</h1>
  <h2>お問い合わせ</h2>
</div>

<div class="subtitle">
  <p>HOME お問い合わせ</p>
</div>


<!------------------------------- 問い合わせフォーム -------------------------------------->
<div class="contact_title">
  <h2>無料問い合わせフォーム</h2>
</div>

<!-- 
<ul class="contact_form">
  <li>
    <div class="contact_form_title">ご希望のサービス</div>
    <div class="contact_form_items form1">[mwform_radio name="service" id="service" children="賃貸募集・賃貸管理,サブリース"]</div>
  </li>
  <li>
    <div class="contact_form_title">物件種別</div>
    <div class="contact_form_items form1">[mwform_radio name="kinds" children="分譲マンション（区分所有）,一棟アパート・マンション,一戸建て,その他"]</div>
  </li>
  <li>
    <div class="contact_form_title">物件所在地</div>
    <div class="contact_form_items">[mwform_text name="address" size="60"]</div>
  </li>
  <li>
    <div class="contact_form_title">お部屋の状況</div>
    <div class="contact_form_items">[mwform_radio name="availability" children="空室,入居中,賃貸中,未完成,分からない,その他"]</div>
  </li>
  <li>
    <div class="contact_form_title">現在依頼中の不動産会社</div>
    <div class="contact_form_items">[mwform_radio name="request_company" children="あり,なし"]</div>
  </li>
  <li>
    <div class="contact_form_title">内容<span class="asterisk">*</span></div>
    <div class="contact_form_items">[mwform_textarea name="content" cols="50" rows="5" placeholder="質問・疑問、細かいご希望等を、ご自由にご入力ください。"]</div>
  </li>
</ul>


<div class="contact_subtitle customer">
  <h3>お客様情報</h3>
</div>

<ul class="contact_form">
  <li>
    <div class="contact_form_title">お名前<span class="asterisk">*</span></div>
    <div class="contact_form_items">[mwform_text name="name" size="60"]</div>
  </li>
  <li>
    <div class="contact_form_title">電話番号<span class="asterisk">*</span></div>
    <div class="contact_form_items">[mwform_text name="tel_number" size="60"]</div>
  </li>
  <li>
    <div class="contact_form_title">メールアドレス<span class="asterisk">*</span></div>
    <div class="contact_form_items">[mwform_text name="mail" size="60"]</div>
  </li>
</ul> -->


<?php echo do_shortcode('[mwform_formkey key="24"]') ?>


<!------------------------------- 個人情報について -------------------------------------->
<!-- <div class="check_privacy">
  <h3>【個人情報のお取扱いについて】</h3>
  <p>当社がフォームで取得した、お客さまの個人情報は、お客さまへの回答および当社『プライバシーポリシー』に基づいて お取り扱い致します。</p>
</div>


<div class="check_privacy_content">
  <div>
    <h1>第1条（個人情報）</h1>
    <p>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
  </div>
  <div>
    <h1>第2条（個人情報の収集方法）</h1>
    <p>当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番</p>
  </div>
</div>

<div class="privacy_check">
  <input type="checkbox" id="scales" name="scales">
  <label for="scales">プライバシーポリシーに同意する</label>
</div>

<p class="privacy_check_p">SSL対応　当ウェブサイトでは、プライバシー保護のため、データを暗号化して送受信します。</p> -->

<hr>

<?php get_footer(); ?>