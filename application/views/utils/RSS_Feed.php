<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
 <title>{blog_title}</title>
 <description>{blog_description}</description>
 <link>{blog_link}</link>
 <lastBuildDate>{last_build_date}</lastBuildDate>
 <pubDate>{last_pub_date}</pubDate>
 <ttl>1800</ttl>
 <atom:link href="{link_self}" rel="self" type="application/rss+xml"  />
 {items}
 <item>
  <title>{title}</title>
  <description>{description}</description>
  <link>{link}</link>
  <guid isPermaLink="false">{guid}</guid>
  <pubDate>{pub_date}</pubDate>
 </item>
{/items}
</channel>
</rss>
