<h2>My PCP Dashboard</h2>
<table>
	<tr>
		<td><b>Page Title</b></td>
		<td><b>Status</b></td>
		<td><b>Contribution Page/Event</b></td>
		<td><b>No of Contributions</b></td>
		<td><b>Amount Raised</b></td>
		<td><b>Target Amount</b></td>
		<td><b>Action</b></td>
	</tr>

	{foreach from=$values item=foo}
	<tr>
		<td><a href="/aks/civicrm/pcp/info?reset=1&amp;id={$foo.contribution_id}">New Entity</a></td>
		<td>{$foo.contribution_status}</td>
		<td>{$foo.contribution_source}</td>
		<td>{$count}</td>
		<td>{$foo.total_amount}</td>
		<td>New entity</td>
		<td><a href="/aks/civicrm/pcp/info?action=update&amp;reset=1&amp;id={$foo.contribution_id}">Edit</a></td>
	</tr>
	{/foreach}
</table>

<!-- {$foo.contribution_id} -->