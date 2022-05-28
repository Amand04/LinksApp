<?php

class Title extends EntityBase
{
    private $theme;
    private $name;
    private $description;

    /**
     * Get the value of theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */
    public function setTheme(string $theme)
    {
        if (is_string($theme) && strlen($theme) > 3 && strlen($theme) < 25) {
            $this->theme = htmlspecialchars($theme);
        }
        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        if (is_string($name) && strlen($name) > 3 && strlen($name) < 55) {
            $this->name = htmlspecialchars($name);
        }
        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription(string $description)
    {
        if (is_string($description) && strlen($description) > 3 && strlen($description) < 255) {
            $this->description = htmlspecialchars($description);
        }
        return $this;
    }
}
