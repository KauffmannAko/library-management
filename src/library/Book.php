<?php 

declare(strict_types=1);

namespace SRC\library;

/**
 * Class Book
 *
 * Represents a book in the library management system.
 *
 * @package library
 */
class Book{

    /**
     * @var string STATUS_AVAILABLE The status indicating the book is available.
     */
    private const STATUS_AVAILABLE = 'available';

    /**
     * @var string STATUS_CHECKED_OUT The status indicating the book is checked out.
     */
    private const STATUS_CHECKED_OUT = 'checked out';

    /**
     * @var string The current status of the book.
     */
    private string $status;

    /**
     * @var string The ISBN of the book.
     */
    private string $isbn;

    /**
     * Book constructor.
     *
     * @param string $id The unique identifier of the book.
     * @param string $title The title of the book.
     * @param string $author The author of the book.
     * @param string $isbn The ISBN of the book.
     * @param string $status The initial status of the book.
     *
     * @throws \InvalidArgumentException If the status is invalid.
     */
    public function __construct(private string $id, private string $title, private string $author, string $isbn, string $status) {
        $this->setStatus($status);
        $this->isbn = $isbn;
    }

    /**
     * Sets the status of the book.
     *
     * @param string $status The status to set.
     *
     * @throws \InvalidArgumentException If the status is invalid.
     */
    private function setStatus(string $status): void {
        $validStatuses = [self::STATUS_AVAILABLE, self::STATUS_CHECKED_OUT];
        if (!in_array($status, $validStatuses, true)) {
            throw new \InvalidArgumentException("Invalid status: $status");
        }
        $this->status = $status;
    }

    /**
     * Gets the details of the book.
     *
     * @return array An associative array containing the book details.
     */
    public function getBookDetails(): array {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'isbn' => $this->isbn,
            'status' => $this->status
        ];
    }

    /**
     * Checks out the book.
     */
    public function checkOutBook(): void {
        $this->status = self::STATUS_CHECKED_OUT;
    }

    /**
     * Checks in the book.
     */
    public function checkInBook(): void {
        $this->status = self::STATUS_AVAILABLE;
    }
}