<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {!! $post->body !!}
        </p>
    </article>
    <a href="/">Go back</h1>
</x-layout>