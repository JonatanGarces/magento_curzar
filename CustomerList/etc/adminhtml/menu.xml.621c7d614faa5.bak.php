<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Backend:etc/menu.xsd">
    <menu>
    <add id="Curzar_CustomerList::courses" resource="Curzar_CustomerList::courses" title="Courses" action="curzar/courses/index" module="Curzar_CustomerList" sortOrder="10"/><add id="Curzar_CustomerList::courses_list" resource="Curzar_CustomerList::courses" title="Courses" action="curzar/courses/index" module="Curzar_CustomerList" sortOrder="10" parent="Curzar_CustomerList::courses" dependsOnModule="Curzar_CustomerList"/><add id="Curzar_CustomerList::sections" resource="Curzar_CustomerList::sections" title="Sections" action="curzar/sections/index" module="Curzar_CustomerList" sortOrder="10" parent="Curzar_CustomerList::courses_list" dependsOnModule="Curzar_CustomerList"/></menu>
</config>
