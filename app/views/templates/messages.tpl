{if $messages->isError()}
                    <h3 style="color:#e52424">Wystąpiły błędy:</h3>
                    <ol class="err">
                        {foreach $messages->getErrors() as $err}
                        {strip}
                        <li style="color:#d5be1d">{$err}</li>
                        {/strip}
                        {/foreach}
                    </ol>
                    {/if}
                    {if $messages->isInfo()}
<br>
<h3 style="color:#e52424">Informacje: </h3>
	<ul>
	{foreach $messages->getInfos() as $inf}
	{strip}
		 <li style="color:#d5be1d">{$inf}</li>
	{/strip}
	{/foreach}
	</ul>
{/if}