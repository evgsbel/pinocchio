<?//if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//$this->setFrameMode(true);
//
//$templateData = array(
//	'NAME' => (isset($arResult['FIELDS']['NAME']) && $arResult['FIELDS']['NAME'] ? $arResult['~NAME'] : ''),
//	'PREVIEW_TEXT' => (isset($arResult['FIELDS']['PREVIEW_TEXT']) && $arResult['FIELDS']['PREVIEW_TEXT'] ? $arResult['~PREVIEW_TEXT'] : ''),
//	'FILE' => (isset($arResult['DISPLAY_PROPERTIES']['FILE']) && $arResult['DISPLAY_PROPERTIES']['FILE']['VALUE'] ? CFile::GetPath($arResult['DISPLAY_PROPERTIES']['FILE']['VALUE']) : ''),
//	'FORM_CODE' => (isset($arResult["DISPLAY_PROPERTIES"]["FORM_CODE"]) && $arResult["DISPLAY_PROPERTIES"]["FORM_CODE"]['VALUE'] ? $arResult["DISPLAY_PROPERTIES"]["FORM_CODE"]['VALUE'] : ''),
//	'BUTTON_TEXT' => (isset($arResult["DISPLAY_PROPERTIES"]["BUTTON_TEXT"]) && $arResult["DISPLAY_PROPERTIES"]["BUTTON_TEXT"]["VALUE"] ? $arResult["DISPLAY_PROPERTIES"]["BUTTON_TEXT"]["VALUE"] : ''),
//);
//?>

<div class="item-views info">
  <div class="item" style="background: url(<?=$arResult['DETAIL_PICTURE']['SRC'];?>) center center / cover no-repeat;">
    <div class="maxwidth-theme">
      <div class="row">
        <div class="col-md-6 text">
          <?if(isset($arResult['DISPLAY_PROPERTIES']['SHOW_BUTTON']) && $arResult['DISPLAY_PROPERTIES']['SHOW_BUTTON']['VALUE_XML_ID'] == 'Y'):?>
            <?if(isset($arResult['DISPLAY_PROPERTIES']['SHOW_INPUT']) && $arResult['DISPLAY_PROPERTIES']['SHOW_INPUT']['VALUE_XML_ID'] == 'Y'):?>
              <div class="swipeignore">
                <div class="form_send_catalog">

                </div>
              </div>
            <?else:?>
              <div class="button"><span class="btn btn-default" data-event="jqm" data-param-id="<?=CLandscape::getFormID($arResult['DISPLAY_PROPERTIES']['FORM_CODE']['VALUE']);?>" data-name="send_form"><?=($arResult['DISPLAY_PROPERTIES']['BUTTON_TEXT']['VALUE'] ? $arResult['DISPLAY_PROPERTIES']['BUTTON_TEXT']['VALUE'] : GetMessage('BUTTON_TEXT'));?></span></div>
            <?endif;?>
          <?endif;?>
        </div>
        <?if(isset($arResult['FIELDS']['PREVIEW_PICTURE']) && $arResult['FIELDS']['PREVIEW_PICTURE']['SRC']):?>
          <div class="col-md-6 img">
            <div class="image"><img src="<?=($arResult['FIELDS']['PREVIEW_PICTURE']['SRC']);?>" alt="<?=($arResult['FIELDS']['PREVIEW_PICTURE']['ALT'] ? $arResult['FIELDS']['PREVIEW_PICTURE']['ALT'] : $arResult['NAME']);?>" title="<?=($arResult['FIELDS']['PREVIEW_PICTURE']['TITLE'] ? $arResult['FIELDS']['PREVIEW_PICTURE']['TITLE'] : $arResult['NAME']);?>" /></div>
          </div>
        <?endif;?>
      </div>
    </div>
  </div>
</div>
