<% if EcommerceDimensions %>
<div id="EcommerceDimensions">
	<h3><% _t("DIMENSIONS", "Dimensions") %></h3>
	<table>
	<% control EcommerceDimensions %>
		<tr>
			<th scope="row">$Measurement</th>
			<td scope="row">$Measure $Unit</td>
		</tr>
	<% end_control %>
	</table>
</div>
<% end_if %>
