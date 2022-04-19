<div class="tags">
{% set my_topics = blog_topics('default', 250) %}
    <h3>Topics</h3>
    <ul>
    {% for item in my_topics %}
        <li><a href="{{ blog_tag_url(group.id, item.slug) }}">{{ item }}</a></li>
    {% endfor %}
    </ul>
</div>
<div class="months">
{# initiate data list variable (outside of posts forloop) #}
{% set posts = blog_recent_posts('default', 250) %}
{%- set month_year_list = [] -%}

{# posts forloop #}
{%- for post in posts -%}
{# entry tuple: year, month (name), month (number) #}
    {%- set entry = (post.publish_date|datetimeformat('%Y'), post.publish_date|datetimeformat('%B'), post.publish_date|datetimeformat('%m')) -%}

    {# unless a tuple matching 'entry' in month_year_list, in given iteration of posts loop, append to month_year_list #}
    {%- unless entry in month_year_list -%}
    
    {# using a new variable to append allow. we never use new variable, this is a worker to pack the original month_year_list #}
    {%- set month_year_list2 = month_year_list.append(entry) -%}
    {%- endunless -%}
{%- endfor -%}
        
    <h3>Archive</h3>
    <ul>
        {# outside of posts loop. loop month_year_list tuples #}
        {%- for item in month_year_list -%}
        <li>
            {# extract tuple contents by index #}
            <a href="{{ group.absolute_url }}/archive/{{item[0]}}/{{ item[2] }}">
            {{ item[1] }} {{ item[0] }}
            </a>
        </li>  
        {%- endfor -%}
    </ul>
</div>
