<div class="grid-x grid-padding-x">
    <div class="cell large-12">
        <div id="project-categories-container">
            <strong>Filter projects by: </strong>

            <ul class="clearfix">
                @foreach ($project_types as $type)
                    <li>
                        <a href="{{ get_term_link($type) }}" @if (($category->name == $type->name))) class="active" @endif>
                            {{ $type->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>    
</div>