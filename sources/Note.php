<?php


namespace App\sources;


class Note
{
    private string $note_name;
    private string $note_description;
    private int $author_id;

    /**
     * Note constructor.
     * @param string $note_name
     * @param string $note_description
     * @param int $author_id
     */
    public function __construct(string $note_name, string $note_description, int $author_id)
    {
        $this->note_name = $note_name;
        $this->note_description = $note_description;
        $this->author_id = $author_id;
    }

    /**
     * @return string
     */
    public function getNoteName(): string
    {
        return $this->note_name;
    }

    /**
     * @param string $note_name
     */
    public function setNoteName(string $note_name): void
    {
        $this->note_name = $note_name;
    }

    /**
     * @return string
     */
    public function getNoteDescription(): string
    {
        return $this->note_description;
    }

    /**
     * @param string $note_description
     */
    public function setNoteDescription(string $note_description): void
    {
        $this->note_description = $note_description;
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    /**
     * @param int $author_id
     */
    public function setAuthorId(int $author_id): void
    {
        $this->author_id = $author_id;
    }
}