### What is this?

I'm using this repository to share a few twig extensions that you can freely include in your projects

### Usage

Place the files in `AppBundle\Twig\Extension` (or wherever you want with the correct namespace) then register them in `services.yml`

```
services:
  twig.extension.extension_name:
    class: AppBundle\Twig\Extension\Twig_Extension_Class_Name
    tags:
      - { name: twig.extension }
```

#### Gravatar Twig Extension

Converts an email to a [Gravatar](https://www.gravatar.com) image URL. All parameters are optional)

```
<img src="{{ user.email|gravatar(image_size_integer, default_image_url_string, image_rating_string) }}" />
```

#### HTML Entities Decode Extension

Runs html_decode_entities on your text

```
{{ myContent|htmldecode }}
```
