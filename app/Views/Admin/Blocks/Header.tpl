{include file="global/Head.tpl"}
{include file="admin/blocks/Navbar.tpl"}

<div class="container">
    {foreach $g.flashes as $flash}
        <div class="mb-3 alert alert-{$flash.type}">
            {$flash.message}
        </div>
    {/foreach}
</div>