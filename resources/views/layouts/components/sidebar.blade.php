<div class="sidebar">
    @if(!isset($hideSubscribe) || !$hideSubscribe)
    <div class="widget-no-style">
        <div class="newsletter-widget text-center align-self-center">
            <h3>Subscribe Today!</h3>
            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
            <form class="form-inline">
                <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
            </form>
        </div><!-- end newsletter -->
    </div>
    @endif

    <div class="widget">
        <h2 class="widget-title">Popular Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach ($popular_posts as $post)
                <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                    class="list-group-item list-group-item-action d-flex align-items-center p-2 min-h-85">

                    <div class="w-100 d-flex align-items-center">
                        <img src="{{ $post->getImage() }}"
                            alt="{{ $post->title }}"
                            class="rounded me-3 object-fit-cover flex-shrink-0 img-fluid w-100 h-100">

                        <div class="flex-grow-1">
                            <h5 class="mb-2 font-weight-bold fs-6 lh-sm">
                                {{ Str::limit($post->title, 50) }}
                            </h5>

                            <span class="text-sm-start">{{ $post->getPostDate() }}</span>
                            <span>| <i class="fa fa-eye"></i> {{ $post->views }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="widget">
        <h2 class="widget-title">Popular Categories</h2>
        <div class="link-widget">
            <ul>
                @foreach ($cats as $cat)
                    <li>
                        <a href="{{ route('categories.single', ['slug' => $cat->slug]) }}">
                            {{ $cat->title }} <span>({{ $cat->posts_count }})</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div><!-- end link-widget -->
    </div><!-- end widget -->
</div>