---
id: cffddb49-a078-4436-86ce-5b9c696fd0fa
blueprint: contact
template: contact
repeater:
  -
    id: lw5w20bu
    type: new_set
    enabled: true
    image:
      src: pages/serenity-foot-and-ankle-specialists_northshore-1.jpg
  -
    id: lx6xz1bg
    image:
      src: pages/serenity-foot-and-ankle-specialists_northshore-2.jpg
    type: new_set
    enabled: true
  -
    id: lx6zjw2d
    image:
      src: pages/serenity-foot-and-ankle-specialists_northshore-3.jpg
    type: new_set
    enabled: true
title: 'Contact Us'
updated_by: 06b22383-0ba2-4c31-a8de-ab3b25c4bf61
updated_at: 1717959672
map_url:
  code: '<iframe class="aspect-video w-full h-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2956.1557009255953!2d-87.8106356589918!3d42.18973827132893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fc1f2eb9e88b7%3A0xcb2cb658f941627b!2sSerenity%20Foot%20and%20Ankle%20Specialists!5e0!3m2!1sen!2sus!4v1717899704968!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
  mode: htmlmixed
parent: home
content:
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        text: '{{ business:name }}'
  -
    type: paragraph
    content:
      -
        type: text
        text: '{{ business:address }}'
  -
    type: paragraph
    content:
      -
        type: text
        text: '{{ business:phone }}'
  -
    type: paragraph
    content:
      -
        type: text
        text: '{{ business:email }}'
  -
    type: paragraph
    content:
      -
        type: text
        text: '{{ business:hours | table }}'
  -
    type: paragraph
  -
    type: paragraph
---
