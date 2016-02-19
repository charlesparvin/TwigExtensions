### What is this?

I'm using this repository to share a few Twig extensions that you can freely include in your projects

### Usage

Place the files in `AppBundle\Twig\Extension` (or wherever you want with the correct namespace) then register them in `services.yml`

```
services:
  twig.extension.extension_name:
    class: AppBundle\Twig\Extension\Twig_Extension_Class_Name
    tags:
      - { name: twig.extension }
```

#### [Gravatar Extension](https://github.com/charlesparvin/TwigExtensions/blob/master/GravatarExtension.php)

Converts an email to a [Gravatar](https://www.gravatar.com) image URL. All parameters are optional (defaults to 64*64 avatars)

```
<img src="{{ user.email|gravatar(image_size_integer, default_image_url_string, image_rating_string) }}" />
```

#### [HTML Entities Decode Extension](https://github.com/charlesparvin/TwigExtensions/blob/master/HtmlEntitiesDecodeExtension.php)

Runs `html_decode_entities()` on your text

```
{{ myContent|htmldecode }}
```
