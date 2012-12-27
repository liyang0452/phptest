<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
				xmlns:msdp="http://www.real.com/msdp"
				xmlns:php="http://php.net/xsl" version="1.0"
				>

<xsl:output omit-xml-declaration="yes" method="html" />

<xsl:template name="field">
	<tr>
		<td><xsl:value-of select="@Label"/></td>
		<td>
			<xsl:element name="input">
				<xsl:attribute name="type">text</xsl:attribute>
				<xsl:attribute name="data-attr"><xsl:value-of select="php:function('translateToObjectName',string(@Name))" /></xsl:attribute>
				<xsl:attribute name="data-field"><xsl:value-of select="@Name" /></xsl:attribute>
				<xsl:attribute name="class">
					<xsl:text>filter-field field-</xsl:text>
					<xsl:value-of select="@Name" />
				</xsl:attribute>
			</xsl:element>
		</td>
		<td>
			<xsl:element name="input">
				<xsl:attribute name="type">checkbox</xsl:attribute>
				<xsl:attribute name="data-attr"><xsl:value-of select="php:function('translateToObjectName',string(@Name))" /></xsl:attribute>
				<xsl:attribute name="data-field"><xsl:value-of select="@Name" /></xsl:attribute>
				<xsl:attribute name="class">
					<xsl:text>filter-enable enable-</xsl:text>
					<xsl:value-of select="@Name" />
				</xsl:attribute>
			</xsl:element>
		</td>
	</tr>
</xsl:template>

<xsl:template match="Fields">
	<table border="0" cellspacing="3">
		<xsl:for-each select="Field">
			<xsl:sort select="@Label"/>
			<xsl:call-template name="field"/>
		</xsl:for-each>
	</table>
</xsl:template>


</xsl:stylesheet>


