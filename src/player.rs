//! A module containing a representation of a player entity in CoH2 replays.

use std::string::String;

use item::Item;

/// This type represents a Company of Heroes 2 player entity as it appears in a CoH2 replay file.

#[derive(Debug, RustcEncodable)]
pub struct Player {
    pub id: u8,
    pub name: String,
    pub steam_id: u64,
    pub steam_id_str: String,
    pub team: u32,
    pub faction: String,
    pub commander: u32,
    pub items: Vec<Item>,
    pub cpm: f64,
}

impl Player {

    /// Constructs a new `Player` with empty initial data.

    pub fn new() -> Player {
        Player {
            id: 0xF,
            name: String::new(),
            steam_id: 0,
            steam_id_str: "0".to_owned(),
            team: 0,
            faction: String::new(),
            commander: 0,
            items: Vec::with_capacity(12), // cmdr x3, intel x3, skin x3, decal, strike, faceplate
            cpm: 0.0,
        }
    }
}