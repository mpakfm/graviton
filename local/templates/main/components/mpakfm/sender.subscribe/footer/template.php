<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$buttonId = $this->randString();

\Bitrix\Main\UI\Extension::load('ui.fonts.opensans');
?>
<div class="bx-subscribe"  id="sender-subscribe">
<?php
$frame = $this->createFrame("sender-subscribe", false)->begin();
?>
	<?if(isset($arResult['MESSAGE'])): CJSCore::Init(['popup']); ?>
		<div id="sender-subscribe-response-cont" style="display: none;">
			<div class="bx_subscribe_response_container">
				<table>
					<tr>
						<td style="padding-right: 40px; padding-bottom: 0px;">
                            <img src="<?=($this->GetFolder().'/images/'.($arResult['MESSAGE']['TYPE']=='ERROR' ? 'icon-alert.png' : 'icon-ok.png'))?>" alt="">
                        </td>
						<td>
							<div style="font-size: 22px;">
                                <?php if ($arResult['MESSAGE']['CODE'] == 'message_err_email_exist') {?>
                                Этот email уже есть в списке подписчиков.
                                <?php } else { ?>
                                <?=GetMessage('subscr_form_response_'.$arResult['MESSAGE']['TYPE'])?>
                                <?php } ?>
                            </div>
							<div style="font-size: 16px;"><?=htmlspecialcharsbx($arResult['MESSAGE']['TEXT'])?></div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<script>
			BX.ready(function(){
				var oPopup = BX.PopupWindowManager.create('sender_subscribe_component', window.body, {
					autoHide: true,
					offsetTop: 1,
					offsetLeft: 0,
					lightShadow: true,
					closeIcon: true,
					closeByEsc: true,
					overlay: {
						backgroundColor: 'rgba(57,60,67,0.82)', opacity: '80'
					}
				});
				oPopup.setContent(BX('sender-subscribe-response-cont'));
				oPopup.show();
                <?php if ($arResult['MESSAGE']['TYPE'] != 'ERROR') { ?>
                $('input[name="SENDER_SUBSCRIBE_EMAIL"]').val('');
                <?php } ?>
			});
		</script>
	<?endif;?>

	<script>
		(function () {
			var btn = BX('bx_subscribe_btn_<?=$buttonId?>');
			var form = BX('bx_subscribe_subform_<?=$buttonId?>');

			if(!btn)
			{
				return;
			}

			function mailSender()
			{
				setTimeout(function() {
					if(!btn)
					{
						return;
					}

                    console.log('[mailSender 1]');

					var btn_span = btn.querySelector("span");
					var btn_subscribe_width = btn_span.style.width;
					BX.addClass(btn, "send");
					btn_span.outterHTML = "<span><i class='fa fa-check'></i> <?=GetMessage("subscr_form_button_sent")?></span>";
					if(btn_subscribe_width)
					{
						btn.querySelector("span").style["min-width"] = btn_subscribe_width+"px";
					}
				}, 400);
			}

			BX.ready(function()
			{
				BX.bind(btn, 'click', function() {
					setTimeout(mailSender, 250);
					return false;
				});
			});

			BX.bind(form, 'submit', function () {
				btn.disabled=true;
				setTimeout(function () {
					btn.disabled=false;
				}, 2000);

				return true;
			});
		})();
	</script>

    <div class="footer__text d1">Будьте в курсе новостей, мероприятий и акций</div>
	<form class="form footer__subscribe" id="bx_subscribe_subform_<?=$buttonId?>" role="form" method="post" action="<?=$arResult["FORM_ACTION"]?>">
		<?=bitrix_sessid_post()?>
		<input type="hidden" name="sender_subscription" value="add">
        <div class="form__inputs">
            <div class="bx-input-group form__input">
                <input class="bx-form-control" type="email" name="SENDER_SUBSCRIBE_EMAIL" value="<?=$arResult["EMAIL"]?>" title="<?=GetMessage("subscr_form_email_title")?>" placeholder="<?=htmlspecialcharsbx(GetMessage('subscr_form_email_title'))?>">
            </div>

            <div class="bx_subscribe_submit_container form__submit">
                <button class="sender-btn btn-subscribe btn btn--bordered" id="bx_subscribe_btn_<?=$buttonId?>"><span><?=GetMessage("subscr_form_button")?></span></button>
            </div>
        </div>
        <div class="footer__checkbox">
            Я соглашаюсь получать рекламные и иные сообщения от ООО “Гравитон” на условиях политики конфиденциальности
        </div>

        <div style="<?=(($arParams['HIDE_MAILINGS'] ?? '') <> 'Y' ? '' : 'display: none;')?>">
            <?if(count($arResult["RUBRICS"])>0):?>
                <div class="bx-subscribe-desc"><?=GetMessage("subscr_form_title_desc")?></div>
            <?endif;?>
            <?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
                <div class="bx_subscribe_checkbox_container">
                    <input type="checkbox" name="SENDER_SUBSCRIBE_RUB_ID[]" id="SENDER_SUBSCRIBE_RUB_ID_<?=$itemValue["ID"]?>" value="<?=$itemValue["ID"]?>"<?if($itemValue["CHECKED"]) echo " checked"?>>
                    <label for="SENDER_SUBSCRIBE_RUB_ID_<?=$itemValue["ID"]?>"><?=htmlspecialcharsbx($itemValue["NAME"])?></label>
                </div>
            <?endforeach;?>
        </div>

        <?if (($arParams['USER_CONSENT'] ?? '') == 'Y'  && $arParams['AJAX_MODE'] <> 'Y'):?>
            <div class="bx_subscribe_checkbox_container bx-sender-subscribe-agreement">
                <?$APPLICATION->IncludeComponent(
                "bitrix:main.userconsent.request",
                "",
                array(
                "ID" => $arParams["USER_CONSENT_ID"],
                "IS_CHECKED" => $arParams["USER_CONSENT_IS_CHECKED"],
                "AUTO_SAVE" => "Y",
                "IS_LOADED" => $arParams["USER_CONSENT_IS_LOADED"],
                "ORIGIN_ID" => "sender/sub",
                "ORIGINATOR_ID" => "",
                "REPLACE" => array(
                "button_caption" => GetMessage("subscr_form_button"),
                "fields" => array(GetMessage("subscr_form_email_title"))
                ),
                )
                );?>
            </div>
        <?endif;?>
	</form>
<?
//$frame->beginStub();
/*
?>
	<?if(isset($arResult['MESSAGE'])): ?>
        <?php
        CUtil::InitJSCore();
        CJSCore::Init(["fx"]);
        CJSCore::Init(['ajax']);
        CJSCore::Init(['popup']);
        ?>
		<div id="sender-subscribe-response-cont" style="display: none;">
			<div class="bx_subscribe_response_container">
				<table>
					<tr>
						<td style="padding-right: 40px; padding-bottom: 0px;"><img src="<?=($this->GetFolder().'/images/'.($arResult['MESSAGE']['TYPE']=='ERROR' ? 'icon-alert.png' : 'icon-ok.png'))?>" alt=""></td>
						<td>
							<div style="font-size: 22px;"><?=GetMessage('subscr_form_response_'.$arResult['MESSAGE']['TYPE'])?></div>
							<div style="font-size: 16px;"><?=htmlspecialcharsbx($arResult['MESSAGE']['TEXT'])?></div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<script>
			BX.ready(function(){
				var oPopup = BX.PopupWindowManager.create('sender_subscribe_component', window.body, {
					autoHide: true,
					offsetTop: 1,
					offsetLeft: 0,
					lightShadow: true,
					closeIcon: true,
					closeByEsc: true,
					overlay: {
						backgroundColor: 'rgba(57,60,67,0.82)', opacity: '80'
					}
				});
				oPopup.setContent(BX('sender-subscribe-response-cont'));
				oPopup.show();
			});
		</script>
	<?endif;?>

	<script>
		(function () {
			var btn = BX('bx_subscribe_btn_<?=$buttonId?>');
			var form = BX('bx_subscribe_subform_<?=$buttonId?>');

			if(!btn)
			{
				return;
			}

			function mailSender()
			{
				setTimeout(function() {
					if(!btn)
					{
						return;
					}

                    console.log('[mailSender 2]');

					var btn_span = btn.querySelector("span");
					var btn_subscribe_width = btn_span.style.width;
					BX.addClass(btn, "send");
					btn_span.outterHTML = "<span><i class='fa fa-check'></i> <?=GetMessage("subscr_form_button_sent")?></span>";
					if(btn_subscribe_width)
					{
						btn.querySelector("span").style["min-width"] = btn_subscribe_width+"px";
					}
				}, 400);
			}

			BX.ready(function()
			{
				BX.bind(btn, 'click', function() {
					setTimeout(mailSender, 250);
					return false;
				});
			});

			BX.bind(form, 'submit', function () {
				btn.disabled=true;
				setTimeout(function () {
					btn.disabled=false;
				}, 2000);

				return true;
			});
		})();
	</script>

    <div class="footer__text d2">Будьте в курсе новостей, мероприятий и акций 2</div>
	<form id="bx_subscribe_subform_<?=$buttonId?>" role="form" method="post" action="<?=$arResult["FORM_ACTION"]?>">
		<?=bitrix_sessid_post()?>
		<input type="hidden" name="sender_subscription" value="add">

		<div class="bx-input-group">
			<input class="bx-form-control" type="email" name="SENDER_SUBSCRIBE_EMAIL" value="" title="2 <?=GetMessage("subscr_form_email_title")?>" placeholder="2 <?=htmlspecialcharsbx(GetMessage('subscr_form_email_title'))?>">
		</div>

		<div style="<?=(($arParams['HIDE_MAILINGS'] ?? '') <> 'Y' ? '' : 'display: none;')?>">
			<?if(count($arResult["RUBRICS"])>0):?>
				<div class="bx-subscribe-desc"><?=GetMessage("subscr_form_title_desc")?></div>
			<?endif;?>
			<?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
				<div class="bx_subscribe_checkbox_container">
					<input type="checkbox" name="SENDER_SUBSCRIBE_RUB_ID[]" id="SENDER_SUBSCRIBE_RUB_ID_<?=$itemValue["ID"]?>" value="<?=$itemValue["ID"]?>">
					<label for="SENDER_SUBSCRIBE_RUB_ID_<?=$itemValue["ID"]?>"><?=htmlspecialcharsbx($itemValue["NAME"])?></label>
				</div>
			<?endforeach;?>
		</div>

		<?if (($arParams['USER_CONSENT_USE'] ?? '') == 'Y' && $arParams['AJAX_MODE'] <> 'Y'):?>
		<div class="bx_subscribe_checkbox_container bx-sender-subscribe-agreement">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.userconsent.request",
				"",
				array(
					"ID" => $arParams["USER_CONSENT_ID"],
					"IS_CHECKED" => $arParams["USER_CONSENT_IS_CHECKED"],
					"AUTO_SAVE" => "Y",
					"IS_LOADED" => "N",
					"ORIGIN_ID" => "sender/sub",
					"ORIGINATOR_ID" => "",
					"REPLACE" => array(
						"button_caption" => GetMessage("subscr_form_button"),
						"fields" => array(GetMessage("subscr_form_email_title"))
					),
				)
			);?>
		</div>
		<?endif;?>

		<div class="bx_subscribe_submit_container">
			<button class="sender-btn btn-subscribe" id="bx_subscribe_btn_<?=$buttonId?>"><span>2 <?=GetMessage("subscr_form_button")?></span></button>
		</div>
	</form>
<?
*/
$frame->end();
?>
</div>
