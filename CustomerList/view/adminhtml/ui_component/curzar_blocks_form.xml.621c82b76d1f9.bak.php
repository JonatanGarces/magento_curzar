<?xml version="1.0" encoding="UTF-8"?>
<form xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Ui:etc/ui_configuration.xsd">
    <argument name="data" xsi:type="array">
        <item name="js_config" xsi:type="array">
            <item name="provider" xsi:type="string">curzar_blocks_form.curzar_blocks_form_data_source</item>
            <item name="deps" xsi:type="string">curzar_blocks_form.curzar_blocks_form_data_source</item>
        </item>
        <item name="label" xsi:type="string" translate="true">Object Information</item>
        <item name="config" xsi:type="array">
            <item name="dataScope" xsi:type="string">data</item>
            <item name="namespace" xsi:type="string">curzar_customerlist_blocks_form</item>
        </item>
        <item name="template" xsi:type="string">templates/form/collapsible</item>
        <item name="buttons" xsi:type="array">
            <item name="back" xsi:type="string">Curzar\CustomerList\Block\Adminhtml\Block\Edit\BackButton</item>
            <item name="delete" xsi:type="string">Curzar\CustomerList\Block\Adminhtml\Block\Edit\DeleteButton</item>
            <item name="reset" xsi:type="string">Curzar\CustomerList\Block\Adminhtml\Block\Edit\ResetButton</item>
            <item name="save" xsi:type="string">Curzar\CustomerList\Block\Adminhtml\Block\Edit\SaveButton</item>
            <item name="save_and_continue" xsi:type="string">Curzar\CustomerList\Block\Adminhtml\Block\Edit\SaveAndContinueButton</item>
        </item>
    </argument>
    <dataSource name="curzar_customerlist_blocks_form_data_source">
        <argument name="dataProvider" xsi:type="configurableObject">
            <argument name="class" xsi:type="string">Curzar\CustomerList\Model\Block\DataProvider</argument>
            <argument name="name" xsi:type="string">curzar_blocks_form_data_source</argument>
            <argument name="primaryFieldName" xsi:type="string">block_id</argument>
            <argument name="requestFieldName" xsi:type="string">block_id</argument>
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="submit_url" xsi:type="url" path="*/*/save"/>
                </item>
            </argument>
        </argument>
        <argument name="data" xsi:type="array">
            <item name="js_config" xsi:type="array">
                <item name="component" xsi:type="string">Magento_Ui/js/form/provider</item>
            </item>
        </argument>
    </dataSource>
    <fieldset name="general">
        <argument name="data" xsi:type="array">
            <item name="config" xsi:type="array">
                <item name="label" xsi:type="string">Form Data</item>
                <item name="collapsible" xsi:type="boolean">true</item>
                <item name="opened" xsi:type="boolean">true</item>
            </item>
        </argument>
        <field name="block_id">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="visible" xsi:type="boolean">false</item>
                    <item name="dataType" xsi:type="string">text</item>
                    <item name="formElement" xsi:type="string">input</item>
                    <item name="dataScope" xsi:type="string">block_id</item>
                </item>
            </argument>
        </field>
        <field name="title">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="dataType" xsi:type="string">text</item>
                    <item name="label" xsi:type="string" translate="true">Title</item>
                    <item name="formElement" xsi:type="string">input</item>
                    <item name="sortOrder" xsi:type="number">20</item>
                    <item name="dataScope" xsi:type="string">title</item>
                    <item name="validation" xsi:type="array">
                        <item name="required-entry" xsi:type="boolean">true</item>
                    </item>
                </item>
            </argument>
        </field>
    </fieldset>
</form>
