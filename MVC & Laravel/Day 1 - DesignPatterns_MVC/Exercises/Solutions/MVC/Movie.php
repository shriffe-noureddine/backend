<?php
class Movie
{
  private $_movie_id;
  private $_title;
  private $_release_year;
  private $_views;
  private $_directorID;
  private $_poster;

  public function __construct(array $hidrate)
  {
    $this->set_movie_id($hidrate['movie_id']);
    $this->set_title($hidrate['title']);
    $this->set_release_year($hidrate['release_year']);
    $this->set_views($hidrate['views']);
    $this->set_directorID($hidrate['directorID']);
    $this->set_poster($hidrate['poster']);
  }

  public function set_poster($_poster)
  {
    $this->_poster = $_poster;
  }

  /**
   * Set the value of _directorID
   *
   * @return  self
   */
  public function set_directorID($_directorID)
  {
    $this->_directorID = $_directorID;

    return $this;
  }

  /**
   * Set the value of _views
   *
   * @return  self
   */
  public function set_views($_views)
  {
    $this->_views = $_views;

    return $this;
  }

  /**
   * Set the value of _release_year
   *
   * @return  self
   */
  public function set_release_year($_release_year)
  {
    $this->_release_year = $_release_year;

    return $this;
  }

  /**
   * Set the value of _title
   *
   * @return  self
   */
  public function set_title($_title)
  {
    $this->_title = $_title;

    return $this;
  }

  /**
   * Set the value of _movie_id
   *
   * @return  self
   */
  public function set_movie_id($_movie_id)
  {
    $this->_movie_id = $_movie_id;

    return $this;
  }


  /**
   * Get the value of _movie_id
   */
  public function get_movie_id()
  {
    return $this->_movie_id;
  }

  /**
   * Get the value of _title
   */
  public function get_title()
  {
    return $this->_title;
  }

  /**
   * Get the value of _release_year
   */
  public function get_release_year()
  {
    return $this->_release_year;
  }

  /**
   * Get the value of _views
   */
  public function get_views()
  {
    return $this->_views;
  }

  /**
   * Get the value of _directorID
   */
  public function get_directorID()
  {
    return $this->_directorID;
  }

  /**
   * Get the value of _poster
   */
  public function get_poster()
  {
    return $this->_poster;
  }
}
