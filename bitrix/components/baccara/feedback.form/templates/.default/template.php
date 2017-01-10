<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? /* test_dump($arResult); */ ?>
<div class="template_wrap">

    <div class="feedback_form-wrap">
        <div class="feedback_form-title"><?= $arParams['FORM_TITLE'] ?></div>
        <form class="feedback_form" method="post">
            <input name="IBLOCK_ID" type="hidden" class="IBLOCK_ID" value="<?= $arParams['IBLOCK_ID'] ?>">
            <div class="feedback_fields-wrap">
                <? foreach ($arResult['FIELDS'] as $field): ?>
                    <? if ($field['PROPERTY_TYPE'] != 'L'): ?>
                        <div>
                            <input type="text" name="<?= $field['CODE'] ?>"
                                   class="feedback-inp feedback_<?= strtolower($field['CODE']) ?>-inp"
                                   placeholder="<?= $field['NAME'] ?>*">
                        </div>
                    <? else: ?>
                        <input name="<?=$field['CODE']?>" type="hidden" value="">
                        <select class="feedback-inp feedback_select">
                            <option><?=$field['NAME']?></option>
                            <? foreach ($field['VALUES'] as $value): ?>
                                <option value="<?= $value['ID'] ?>">
                                    <?= $value['VALUE'] ?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    <? endif; ?>

                <? endforeach; ?>
            </div>

            <div class="feedback-text">
                <textarea name="COMMENT" placeholder="Комментарий" class="feedback_text-field"></textarea>
            </div>
            <div class="feedback-btn-block">
                <input name="submit" type="submit" value="Отправить" class="feedback-btn">
            </div>
        </form>
    </div>
</div>

