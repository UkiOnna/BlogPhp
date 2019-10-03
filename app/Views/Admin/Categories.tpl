{include file="Admin/Blocks/Header.tpl"}

<div class="container">
    <div class="mb-3 text-right">
        <a href="/admin/categories/create" class="btn btn-success">Create category</a>
    </div>
    {foreach $categories as $category}

        <div class="card card-body mb-3 d-flex flex-row allign-content-start justify-content-start">
            <div>
                <div class="mb-1">
                    <h3><a href="/admin/categories/{$category.id}"></a> {$category.name}</h3></div>
            </div>
            <div class="btn-group btn-group-sm ml-auto mb-auto">
                <a href="/admin/categories/update/{$category.id}" class="btn btn-secondary">
                    Change
                </a>

                <a href="/admin/categories/delete/{$category.id}" class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    {/foreach}
</div>
{include file="global/footer.tpl"}