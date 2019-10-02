{include file="Admin/Blocks/Header.tpl"}
<h1>Dashboard</h1>

<div class="container">
    <div class="mb-3 text-right">
        <a href="/admin/posts/create" class="btn btn-success">Create post</a>
    </div>
    {foreach $posts as $post}

        <div class="card card-body mb-3 d-flex flex-row allign-content-start justify-content-start">
            <div>
            <div class="mb-1">
                <h3><a href="/admin/users/{$post.author.id}">{$post.author.name}</a> - {$post.title}</h3></div>
                <span class="badge badge-secondary">
                    {$post.category.name}
                </span>
            <small class="text-muted">
                {$post.date}
            </small>
            </div>
            <div class="btn-group btn-group-sm ml-auto mb-auto">
                <a href="/posts/{$post.id}" class="btn btn-primary" target="_blank">
                    View
                </a>
                <a href="/admin/posts/update/{$post.id}" class="btn btn-secondary">
                    Change
                </a>

                <a href="/admin/posts/delete/{$post.id}" class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    {/foreach}
</div>
{include "global/footer.tpl"}