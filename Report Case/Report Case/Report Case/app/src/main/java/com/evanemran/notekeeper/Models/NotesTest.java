package com.evanemran.notekeeper.Models;


import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertFalse;
import static org.junit.Assert.assertTrue;

import org.junit.Before;
import org.junit.Test;

public class NotesTest {

    private Notes notes;

    @Before
    public void setUp() {
        notes = new Notes();
    }

    @Test
    public void testGetSetID() {
        notes.setID(1);
        assertEquals(1, notes.getID());
    }

    @Test
    public void testGetSetTitle() {
        notes.setTitle("Note Title");
        assertEquals("Note Title", notes.getTitle());
    }

    @Test
    public void testGetSetNotes() {
        notes.setNotes("Note content");
        assertEquals("Note content", notes.getNotes());
    }

    @Test
    public void testGetSetColorCode() {
        notes.setColor_code("#FF0000");
        assertEquals("#FF0000", notes.getColor_code());
    }

    @Test
    public void testGetSetDate() {
        String date = "2023-05-10";
        notes.setDate(date);
        assertEquals(date, notes.getDate());
    }

    @Test
    public void testGetSetStarred() {
        notes.setStarred(true);
        assertTrue(notes.isStarred());
    }

    @Test
    public void testDefaultValues() {
        assertEquals(0, notes.getID());
        assertEquals("", notes.getTitle());
        assertEquals("", notes.getNotes());
        assertEquals("", notes.getColor_code());
        assertFalse(notes.isStarred());
    }

    @Test
    public void testSetStarred() {
        notes.setStarred(true);
        assertTrue(notes.isStarred());

        notes.setStarred(false);
        assertFalse(notes.isStarred());
    }

    @Test
    public void testSetDate() {
        String date = "2023-05-10";
        notes.setDate(date);
        assertEquals(date, notes.getDate());

        String anotherDate = "2023-06-15";
        notes.setDate(anotherDate);
        assertEquals(anotherDate, notes.getDate());
    }
}
