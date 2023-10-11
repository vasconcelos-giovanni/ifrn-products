<?php

declare(strict_types = 1);

namespace App;

abstract class Model
{
    /**
     * @var Database $database Database connection
     */
    protected $database;

    public function __construct()
    {
        $this->database = App::database();
    }

    /**
     * Create a new record in the database.
     *
     * @param array $data The data to insert.
     *
     * @return bool True on success, false on failure.
     */
    abstract public function create($data);

    /**
     * Update an existing record in the database.
     *
     * @param int $id The ID of the record to update.
     * @param array $data The data to update.
     *
     * @return bool True on success, false on failure.
     */
    abstract public function update($id, $data);

    /**
     * Delete a record from the database.
     *
     * @param int $id The ID of the record to delete.
     *
     * @return bool True on success, false on failure.
     */
    abstract public function delete($id);

    /**
     * Find a record by its ID.
     *
     * @param int $id The ID of the record to find.
     *
     * @return array|null The record data if found, null if not found.
     */
    abstract public function find($id);

    /**
     * Get all records from the database.
     *
     * @return array An array of records.
     */
    abstract public function all();
}