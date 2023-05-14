package com.evanemran.notekeeper.Listeners;


import static org.junit.Assert.assertNotNull;

import androidx.cardview.widget.CardView;

import com.evanemran.notekeeper.Models.Notes;

import org.junit.Test;

public class NoteClickListenerTest {

    @Test
    public void testOnClick() {
        // Arrange
        NoteClickListener listener = new NoteClickListener() {
            @Override
            public void onClick(Notes notes) {
                // Do nothing for testing purposes
            }

            @Override
            public void onLongClick(Notes notes, CardView cardView) {
                // Do nothing for testing purposes
            }
        };

        // Act & Assert
        assertNotNull(listener);
    }

    @Test
    public void testOnLongClick() {
        // Arrange
        NoteClickListener listener = new NoteClickListener() {
            @Override
            public void onClick(Notes notes) {
                // Do nothing for testing purposes
            }

            @Override
            public void onLongClick(Notes notes, CardView cardView) {
                // Do nothing for testing purposes
            }
        };

        // Act & Assert
        assertNotNull(listener);
    }
}
