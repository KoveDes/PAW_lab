
<table id="tab_people">
<thead>
	<tr>
		<th>Kwota</th>
		<th>Czas (lata)</th>
		<th>Oprocentowanie (%)</th>
		<th>Rata miesięczna</th>
		<th>Data</th>
	</tr>
</thead>
<tbody>
{foreach $data as $item}
{strip}
	<tr>
		<td>{$item['kwota']}</td>
		<td>{$item['lat']} </td>
		<td>{$item['procent']}</td>
		<td>{$item['rata']}</td>
		<td>{$item['data']}</td>
		
	</tr>
{/strip}
{/foreach}
</tbody>
</table>