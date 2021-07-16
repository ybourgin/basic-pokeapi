<?php


namespace Hb\BasicPokeapi;


class Pokemon
{
    private int $id;
    private string $name;
    private int $weight;
    private int $base_experience;
    private string $frontDefault;

    /**
     * Pokemon constructor.
     * @param int $id
     * @param string $name
     * @param int $weight
     * @param int $base_experience
     * @param string $frontDefault
     */
    public function __construct(int $id, string $name, int $weight, int $base_experience, string $frontDefault)
    {
        $this->id = $id;
        $this->name = $name;
        $this->weight = $weight;
        $this->base_experience = $base_experience;
        $this->frontDefault = $frontDefault;
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getBaseExperience(): int
    {
        return $this->base_experience;
    }

    /**
     * @return string
     */
    public function getFrontDefault(): string
    {
        return $this->frontDefault;
    }
}